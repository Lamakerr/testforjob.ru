@extends('layouts.main')
@section('page.title', 'Редактирование категории')
@section('main.content')
        <x-title>
                Редактирование категории
                <x-slot name='right'>
                    <x-button-link href="{{route('user.categories.show', $category->id)}}">
                        Назад
                    </x-button-link>
                </x-slot>
        </x-title>
     <x-category.category-form action="{{route('user.categories.update', $category->id)}}" method="PUT" :category="$category"/>
  @endsection