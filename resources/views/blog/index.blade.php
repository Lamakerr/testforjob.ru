@extends('layouts.main')
@section('page.title', 'Статьи')
@section('main.content')
<x-title>
    Статьи
    <x-slot name='right'>
    </x-slot>
</x-title>
<div class="d-flex">
    <div class="container-fluid mt-2">
        <form class="d-flex" action="{{route('blog')}}" method="get">
            <input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif type="text" class="form-control" id="exampleFormControlInput1" placeholder="Поиск...">
          <button class="btn btn-dark" type="submit">Поиск</button>
        </form>
      </div>
    <form action="{{route('blog')}}" method="get" class="d-flex"  >
        <div class="mb-3 mt-2 d-flex">
            <select name="category_id" class="form-select form-select-sm "  style="width:120px " aria-label=".form-select-sm example">
                <option value="" disabled selected>Категория</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}" @if(isset($_GET['category_id'])) @if($_GET['category_id'] == $category->id) selected @endif @endif placeholder="сортировка по категориям">{{$category->title}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-dark ms-2">Выбрать</button>
        </div>
    </form>
</div>
@if (empty($posts))
Статьи отсуствуют
@else
    <div class="row">
        @foreach ($posts as $post )
    <div class="col-12 mb-3 mt-1" >
           <div class="mt-1">
            <a href="{{route('blog.show',$post->id)}}"><img src="/users/posts/images/{{$post->image}}" class="rounded float-start flex-shrink-0" style="width:150px; height:120px;" alt="Post  Image"></a>
           </div>
           <div class='mt-4 text-center'>
            <a href="{{route('blog.show',$post->id)}}"  class="text-center h6">{{$post->title}}</a>
            <p>{{$post->anonse}}</p>
           </div>
       <x-description>
        <div class="ms-2 mt-5">
            Автор: {{ $post->author->firstname}} 
        </div>
        <div  class="float-end mt-5">
          Дата создания: {{$post->created_at}}
        </div> 
       </x-description>
    </div>
    @endforeach    
    </div>
   {{$posts->links()}}
@endif
@endsection