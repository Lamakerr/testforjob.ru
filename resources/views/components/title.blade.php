<div  class="border-bottom mt-3">
@isset($link)
<div class="ml-0">
{{$link}}
</div>  
@endisset
<div class="d-flex justify-content-between">
    <div>
        <h1 class="mb-3 text-center">
            {{ $slot }}
           </h1> 
    </div>
    @isset($right)
    <div>
        {{ $right }}
    </div>
    @endisset
</div>
</div>   

{{-- <x-errors/>   --}}