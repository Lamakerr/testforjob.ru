@php
    $name=$attributes->get('name');
@endphp
@error($name)
            <div class="small text-danger pt-1">
                {{$message}}
            </div>               
@enderror