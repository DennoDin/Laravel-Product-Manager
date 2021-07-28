<div class="grid grid-cols-10">
    <span class="p-3 col-start-1 col-end-2">
        <img src="{{ $image }}" />
    </span>
    <span class="p-3 col-start-2 col-end-3 break-words">{{ $name ?? ''}}</span>
    <span class="p-3 col-start-3 col-end-4 break-words">{{ $sku ?? ''}}</span>
    <span class="p-3 col-start-4 col-end-8 break-words">{{ $description ?? '' }}</span>
    <span class="p-3 col-start-8 col-end-9 break-words">
        <span class="p-1 bg-white border-b ml-3">
            <a href="products/{{$sku}}/edit">Edit</a>
        </span>
    </span>
    <span class="p-3 col-start-9 col-end-10">
        <form method="POST" action="{{ 'products/' }}">
            @csrf
            {{method_field("DELETE")}}
            <x-input id="id" type="hidden" name="id" :value="$id" />
            <button>Delete</button>
        </form>
    </span>
</div>