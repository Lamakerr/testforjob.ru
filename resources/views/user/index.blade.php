@extends('layouts.main')
@section('page.title', 'Личный кабинет')
@section('main.content')
        <x-title>
            <img src="users/avatars/{{ $user->avatar }}" class="rounded-circle float-left" style="width:100px; height:100px;" alt="User Avatar">
                 {{auth()->user()->firstname;}}
               <x-slot name="right">
                            <div class="mt-4">
                                <x-button-link href="{{route('user.avatars.index')}}">
                                    Настройка профиля
                                 </x-button-link>
                            </div>
               </x-slot>
        </x-title>
             <div class="row mt-3">
                 @forelse ($posts as $post )
             <div class="col-12  mb-5">
                <h2 class="h6">
                    <a href="{{route('user.posts.show',$post->id)}}"><img src="/users/posts/images/{{$post->image}}" class="rounded float-start flex-shrink-0" style="width:150px; height:120px;" alt="Post  Image"></a>
                    <div class="mt-4 text-center">
                        <a href="{{route('user.posts.show',$post->id)}}">{{$post->title}}</a>
                        <p>{{ $post->anonse}}</p>
                    </div>    
                </h2>
                <x-description>
                    <div class="ms-2 mt-5">
                        Автор: {{ $post->author->firstname}} 
                    </div>
                    <div  class="float-end mt-5">
                      Дата создания: {{$post->created_at}}
                    </div> 
                </x-description>
             </div>
             @empty
             Вы еще не создавали статей!  
             </div>
        @endforelse
           @endsection