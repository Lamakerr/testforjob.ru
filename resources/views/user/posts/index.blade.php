@extends('layouts.main')
@section('page.title', 'Мои статьи')
@section('main.content')
        <x-title>
                Статьи
                <x-slot name='right'>
                    <x-button-link href="{{route('user.posts.create')}}">
                        Cоздать
                    </x-button-link>
                </x-slot>
            </x-title>
            <div class="d-flex">
                <div class="container-fluid mt-2">
                    <form class="d-flex" action="{{route('user.posts')}}" method="get">
                        <input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif type="text" class="form-control" id="exampleFormControlInput1" placeholder="Поиск...">
                      <button class="btn btn-dark" type="submit">Поиск</button>
                    </form>
                  </div>
                <form action="{{route('user.posts')}}" method="get" class="d-flex"  >
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
                <form action="{{route('user.posts')}}" method="get" class="d-flex"  >
                    <div class="mb-3 mt-2 d-flex ms-2">
                        <select name="user_id" class="form-select form-select-sm "  style="width:120px " aria-label=".form-select-sm example">
                            <option value="" disabled selected>Автор</option>
                            @foreach($users as $user)
                            <option value="{{$user->id}}" @if(isset($_GET['user_id'])) @if($_GET['user_id'] == $user->id) selected @endif @endif placeholder="сортировка по авторам">{{$user->firstname}}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-dark ms-2">Выбрать</button>
                    </div>
                </form>
            </div>
                <div class="row">
                    @forelse ($posts as $post )
                <div class="col-12 mb-3 mt-1" >
                       <div class="mt-1">
                        <a href="{{route('user.posts.show',$post->id)}}"><img src="/users/posts/images/{{$post->image}}" class="rounded float-start flex-shrink-0" style="width:150px; height:120px;" alt="Post  Image"></a>
                       </div>
                       <div class='mt-4 text-center'>
                        <a href="{{route('user.posts.show',$post->id)}}"  class="text-center h6">{{$post->title}}</a>
                        <p>{{$post->anonse}}</p>
                       </div>
                   <x-description>
                    <div class="ms-2 mt-5">
                       <a href="{{ route('user.authors.show',$post->user_id) }}">Автор: {{ $post->author->firstname}} </a> 
                    </div>
                    <div  class="float-end mt-5">
                      Дата создания: {{$post->created_at}}
                    </div> 
                   </x-description>
                </div>
                @empty
                Статьи отсувствуют!
           @endforelse
                </div>
               {{$posts->links()}}
           @endsection