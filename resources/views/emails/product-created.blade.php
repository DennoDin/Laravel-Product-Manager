@component('mail::message')
# Introduction

## A new product has been created!

| Name    | SKU | Description |
| ------- | --- | ----------- |
|{{ $product->name }} | {{ $product->SKU }} | {{ $product->description }} |

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
