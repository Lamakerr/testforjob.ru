@extends('layouts.main')
@section('page.title', 'Cоздание категории')
@section('main.content')
        <x-title>
                Создание категории
                <x-slot name='right'>
                    <x-button-link href="{{route('user.categories')}}">
                        Назад
                    </x-button-link>
                </x-slot>
        </x-title>
     <x-category.category-form action="{{route('user.categories.store')}}" method="POST"/>
  @endsection