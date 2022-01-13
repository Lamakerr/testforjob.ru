@props(['color' => 'dark'])
<a {{ $attributes }}>
<x-button>
    {{$slot}}
</x-button>
</a>