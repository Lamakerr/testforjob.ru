@php
    $title=$attributes->get('title');
@endphp
<label {{ $attributes->class( 'mb-2', )}} data-toggle="tooltip" data-placement="bottom" title={{$title}}>
    {{ $slot }}
</label>