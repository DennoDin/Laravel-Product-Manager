<x-app-layout>
    <x-slot name="header">
        <a href="/products">Products</a> > Create A Product
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- PRODUCT BODY
                EXECUTE: ACCESS PRODUCT CRUD -->

                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('products') }}" enctype="multipart/form-data">
                    @csrf

                    <!-- Name -->
                    <div class="p-3">
                        <x-label for="name" value="Name" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                    </div>

                    <!-- SKU -->
                    <div class="p-3">
                        <x-label for="sku" value="SKU" />
                        <x-input id="sku" class="block mt-1 w-full" type="text" name="sku" value="" required autofocus />
                    </div>
                    
                    <!-- Description -->
                    <div class="p-3">
                        <x-label for="description" value="Description" />
                        <x-input id="description" class="block mt-1 w-full" type="text" name="description" value="" required autofocus />
                    </div>
                    
                    <!-- Image Upload -->
                    <div class="p-3">
                        <x-label for="image" value="Image" />
                        <x-input id="image" class="block mt-1" type="file" name="image" required autofocus />
                    </div>
                    
                    <!-- Submit -->
                    <div class="flex justify-end mt-4">
                        <x-button class="ml-3">Create</x-button>
                    </div>
                </form>
            </div>
        </div>
    </div>  
</x-app-layout>