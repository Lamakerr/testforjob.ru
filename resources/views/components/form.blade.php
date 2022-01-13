@php($method=$attributes->get('method'))
@props(['method'=>'POST'])
@php($method=strtoupper($method))
@php($_method=in_array($method, ['POST', 'GET']))
<form {{ $attributes }} method="{{ $_method ? $method : 'POST'}}" enctype='multipart/form-data'>
    @unless($_method) 
    @method($method)
    @endunless
    @csrf 
    {{ $slot }}
</form>