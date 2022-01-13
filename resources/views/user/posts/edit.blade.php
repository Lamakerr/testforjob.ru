@extends('layouts.main')
@section('page.title', 'Редактирование статьи')
@section('main.content')
        <x-title>
                Редактирование статьи 
                <x-slot name='right'>
                    <x-button-link href="{{route('user.posts.show', $post->id)}}">
                        Назад
                    </x-button-link>
                </x-slot>
        </x-title>
     <x-post.post-form action="{{route('user.posts.update', $post->id)}}" method="PUT" :post="$post"/>
  @endsection