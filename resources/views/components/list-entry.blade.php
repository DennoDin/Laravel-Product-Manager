<div class="grid grid-cols-10">
    <!-- <span class="p-3 col-start-1 col-end-2"> -->
        <!-- TODO: image here -->
        <!-- <img src="{{ $image }}" -->
    <!-- </span> -->
    <span class="p-3 col-start-2 col-end-3">{{ $name ?? ''}}</span>
    <span class="p-3 col-start-3 col-end-4">{{ $sku ?? ''}}</span>
    <span class="p-3 col-start-4 col-end-8">{{ $description ?? '' }}</span>
    <span class="p-3 col-start-8 col-end-9">
        <p>Edit {{ $sku }}</p>
    </span>
    <span class="p-3 col-start-9 col-end-10">
        <p>Delete {{ $sku }}</p>
    </span>
</div>