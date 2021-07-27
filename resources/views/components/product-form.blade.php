<div>
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('products') }}" enctype="multipart/form-data">
        @csrf
        {{method_field($formType)}}
        <!-- Hidden Id -->
        <x-input id="id" type="hidden" name="id" :value="$id" />

        <!-- Name -->
        <div class="p-3">
            <x-label for="name" value="Name" />
            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$name" required autofocus />
        </div>

        <!-- SKU -->
        <div class="p-3">
            <x-label for="sku" value="SKU" />
            <x-input id="sku" class="block mt-1 w-full" type="text" name="sku" :value="$sku" required autofocus />
        </div>
        
        <!-- Description -->
        <div class="p-3">
            <x-label for="description" value="Description" />
            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$description" required autofocus />
        </div>
        
        <!-- Image Upload -->
        <div class="p-3">
            <x-label for="image" value="Image" />
            <x-input id="image" class="block mt-1" type="file" name="image" required autofocus />
        </div>
        
        <!-- Submit -->
        <div class="flex justify-end mt-4">
            <x-button class="ml-3">{{ $finishButton }}</x-button>
        </div>
    </form>
</div>