<?php

namespace App\Mail;

use App\Models\Product;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ProductCreated extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Product $product)
    {
        return $this->subject('New Product Created')->markdown('emails.product-created', [
            "product" => $product,
        ]);
    }
}
