@props(['color' => 'dark'])
<button {{ $attributes->class(["btn btn-{$color}","offset-md-5" ])->merge([ 'type'=> 'button',])}}>
    {{ $slot}}
</button>