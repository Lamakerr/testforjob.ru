<x-card>
    <x-card-body>
        <div class="mb-3 text-center">
            <h5>
                <a href="{{route('user.categories.show',$category->id)}}">
                    {{$category->title}}
                </a>
            </h5>
                 <p>
                   {!!$category->content!!}
                 </p>  
        </div>
        <div class="d-flex justify-content-between">
  <div>
     Автор
    </div> 
    <div class="small text-muted">
        {{$category->created_at}}
    </div>
  </div>
    </x-card-body>
   </x-card>