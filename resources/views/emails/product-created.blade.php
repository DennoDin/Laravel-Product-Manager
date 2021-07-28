@component('mail::message')

## A new product has been created!

<!-- ### Details
| Name    | SKU | Description |
| ------- | --- | ----------- |
|{{ $product->name }} | {{ $product->SKU }} | {{ $product->description }} | -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
