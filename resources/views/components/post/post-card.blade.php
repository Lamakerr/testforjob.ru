<x-card>
    <x-card-body>
        <div class="mb-3 text-center">
            <h5>
                <a href="{{route('blog.show',$post->id)}}">
                    {{$post->title}}
                </a>
            </h5>
                 <p>
                   {!!$post->content!!}
                 </p>  
        </div>
        <div class="d-flex justify-content-between">
  <div>
     {{ $post->user_id }}
    </div> 
    <div class="small text-muted">
        {{ $post->created_at }}
    </div>
  </div>
    </x-card-body>
   </x-card>