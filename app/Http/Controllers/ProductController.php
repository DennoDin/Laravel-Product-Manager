<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductsRequest;
use App\Mail\ProductCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->get();

        return view('products.list-products')->with('productsList', $products);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create-products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'sku' => 'required|string|max:255|unique:products',
            'description' => 'string|max:255',
        ]);

        $image = (String) Image::make(file_get_contents($request->file('image')))->fit(100)->encode('data-url');

        $product = Product::create([
            'name' => $request->name,
            'sku' => $request->sku,
            'description' => $request->description,
            'image' => $image,
        ]);

        $mailArray = [];
        $userTable = DB::table('users')->select('first-name', 'last-name', 'email')->get();
        foreach ($userTable as $user) {
            $moddedUser = [
                'name' => $user->{'first-name'}." ".$user->{'last-name'},
                'email' => $user->email,
            ];

            array_push($mailArray, $moddedUser);
        }

        Mail::to($mailArray)->send(new ProductCreated($product));

        return redirect('/products');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(String $sku)
    {
        $item = DB::table('products')->where('SKU', $sku)->first();

        return view('products.edit-product', [
            'id' => $item->id,
            'name' => $item->name,
            'sku' => $item->SKU,
            'description' => $item->description,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $item = Product::findOrFail($request->id);
        
        $validateArray = [];
        if($item->name !== $request->name) {
            $validateArray['name'] = 'required|string|max:255';
        }
        if($item->SKU !== $request->sku) {
            $validateArray['sku'] = 'required|string|max:255|unique:products';
        } 
        if($item->description !== $request->description) {
            $validateArray['description'] = 'required|string|max:255';
        }
        
        $request->validate($validateArray);


        $image = (String) Image::make(file_get_contents($request->file('image')))->fit(100)->encode('data-url');

        $item->name = $request->name;
        $item->sku = $request->sku;
        $item->description = $request->description;
        $item->image = $image;

        $item->save();

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Product::destroy($request->id);
        return redirect('/products');
    }
}
