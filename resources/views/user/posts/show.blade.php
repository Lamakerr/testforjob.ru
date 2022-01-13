@extends('layouts.main')
@section('page.title', 'Просмотр статьи')
@section('main.content')
        <x-title>
           <a href="{{route('user.categories.show',$post->category_id)}}" class="h4">Категория: {{ $post->category->title}}</a>  
        </x-title>
        <div class="mt-2">
            <div class="float-start p-1">
            <img src="/users/posts/images/{{$post->image}}" class="rounded" style="width:150px; height:120px;" alt="Post  Image">
           </div>
           <div class="d-flex ms-2">
            <h3 class="h4 mt-3">
                {{$post->title}}
            </h3>
            <div class="d-flex justify-content-end bd-highlight mb-3">
                <div class="p-2 bd-highlight">
                    <x-button-link href="{{route('user.posts.edit',$post->id)}}">
                        Изменить
                    </x-button-link> 
                </div>
            <div class="p-2 ms-4 bd-highlight">
                <x-modal :post="$post"/>
            </div>
            </div>
           </div>
        </div>
       <x-description>
           <div class="container mt-5">
               <div class="row">
                <div class="col flex-justify-bitween">
                    Дата создания: {{$post->created_at}}
                    <a href="{{ route('user.authors.show',$post->user_id) }}">Автор: {{ $post->author->firstname}} </a> 
                   </div>
                        </div>
                    </div>
       </x-description>
        <div class="pt-3 border-bottom">
           <div class="mt-2 mb-5">
            {!!$post->content!!}
           </div> 
        </div>
        <div class="mt-5">
            <x-button-link href="{{url()->previous()}}">
                Назад</x-button-link>
        </div>
           @endsection