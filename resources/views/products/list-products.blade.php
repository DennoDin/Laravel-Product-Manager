<x-app-layout>
    <x-slot name="header">
        {{ __('Products') }}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <span class="p-4 bg-white border-b ml-3">
                    <a href="products/create">Add a new product</a>
                </span>
            </div>
            <br/>
            <div class="p-6 bg-white border-b border-gray-200">
                <div class="grid grid-cols-10">
                    <h2 class="col-start-1 col-end-2">Products:</h2>
                    <h2 class="col-start-2 col-end-3 ">Name</h2>
                    <h2 class="col-start-3 col-end-4 ">SKU#</h2>
                    <h2 class="col-start-4 col-end-7 ">Description</h2>
                    <h2 class="col-start-8 col-end-10 ">Actions</h2>
                </div>
                @foreach ($productsList as $item)
                <x-list-entry>
                    <x-slot name="image">
                        {{ $item->image }}
                    </x-slot>
                    <x-slot name="name">
                        {{ $item->name }}
                    </x-slot>
                    <x-slot name="sku">
                        {{ $item->SKU }}
                    </x-slot>
                    <x-slot name="description">
                        {{ $item->description }}
                    </x-slot>
                    <x-slot name="id">
                        {{ $item->id }}
                    </x-slot>
                </x-list-entry>
                @endforeach
            </div>
        </div>
    </div>  
</x-app-layout>