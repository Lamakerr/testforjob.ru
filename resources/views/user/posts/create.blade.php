@extends('layouts.main')
@section('page.title', 'Cоздание статьи')
@section('main.content')
        <x-title>
                Создание статьи  
                <x-slot name='right'>
                    <x-button-link href="{{route('user.posts')}}">
                        Назад
                    </x-button-link>
                </x-slot>
        </x-title>
     <x-post.post-form action="{{route('user.posts.store')}}" method="POST">    
        <x-option>
            @foreach ($categories as $category)
            <option value={{$category->id}}>{{$category->title}}</option>
            @endforeach
          </x-option>
        <x-error name='option'/>
    </x-post.post-form>
  @endsection