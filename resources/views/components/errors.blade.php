@if($errors->any())
 <div class="alert alert-danger mb-0 small p-2">
    <ul>
        @foreach ($errors->all() as $message)
        <li>
            {{ $message }}
        </li>
            
        @endforeach
    </ul>
 </div>
@endif