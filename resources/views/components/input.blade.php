@php
    $value=$attributes->get('value');
@endphp
<input {{ $attributes->class(['form-control'])->merge(['type'=>'text', 'value'=>old($attributes->get('name')) ?: $value,])}}>