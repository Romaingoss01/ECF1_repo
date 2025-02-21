@props(['active' => False])

<a class="rounded-md px-3 py-2 text-sm font-medium {{$active ? "bg-gray-900 text-white" : "text-gray-300 hover:bg-gray-700 hover:text-white"}}" {{$attributes}}>
    {{$slot}}
</a>
