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
                Products:

            </div>
        </div>
    </div>  
</x-app-layout>