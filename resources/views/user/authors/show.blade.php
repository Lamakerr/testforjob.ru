@extends('layouts.main')
@section('page.title', 'Просмотр автора')
@section('main.content')
        <x-title>
                Просмотр автора
        </x-title>
        <h2 class="h3">
            <div class="float-start p-1">
                <img src="/users/avatars/{{$user->avatar}}" class="rounded" style="width:150px; height:120px;" alt="Avatar Image">
            </div>
            {{$user->firstname}} {{$user->lastname}}
        </h2>
        <div class="small text-muted">
          Дата регистрации: {{$user->created_at}}
        </div>
        <div class="pt-3">
            {{$user->firstname}} {{$user->lastname}} {{$user->dadname}}
            <p> Дата рождения: {{$user->buthday}}</p>
            <p> Email: {{$user->email}}</p>
        </div>
        <div class="mt-5">
            <x-button-link href="{{url()->previous()}}">
                Назад</x-button-link>
        </div>
@endsection