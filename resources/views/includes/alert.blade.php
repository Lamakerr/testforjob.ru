@if ($alert=session()->pull('alert'))
   <div class="alert alert-success mb-0 raunded-0 text-center small py-2">
    {{ $alert }}
   </div>  
@endif
@if ($alertred=session()->pull('alertred'))

<div class="alert alert-danger mb-0 raunded-0 text-center small py-2">
    {{ $alertred }}
   </div>  
    
@endif