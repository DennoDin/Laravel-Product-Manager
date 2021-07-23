<x-app-layout>
    <x-slot name="header">
        {{ __('Products') }}
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white border-b border-gray-200">
                <!-- PRODUCT BODY
                EXECUTE: ACCESS PRODUCT CRUD -->

                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('addProduct') }}">
                    @csrf

                    <!-- Name -->
                    <div>
                        <x-label for="name" :value="name" />
                        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <!-- SKU -->
                    
                    <!-- Description -->
                    
                    <!-- Image Upload -->
                </form>
            </div>
        </div>
    </div>  
</x-app-layout>