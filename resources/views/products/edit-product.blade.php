<x-app-layout>
    <x-slot name="header">
        <a href="/products">Products</a> > Edit A Product
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <x-product-form>
                  <x-slot name="id"> {{ $id ?? '' }}</x-slot>
                  <x-slot name="formType">{{ 'PUT' }}</x-slot>
                  <x-slot name="name">{{ $name ?? '' }}</x-slot>
                  <x-slot name="sku">{{ $sku ?? '' }}</x-slot>
                  <x-slot name="description">{{ $description ?? '' }}</x-slot>
                  <x-slot name="finishButton">{{ 'Update' }}</x-slot>
                </x-product-form>
            </div>
        </div>
    </div>  
</x-app-layout>