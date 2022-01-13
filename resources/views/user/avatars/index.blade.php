@extends('layouts.main')
@section('page.title', 'Личный кабинет')
@section('main.content')
<x-form action="{{ route('user.avatars.store', $userId)}}" method="POST" enctype='multipart/form-data'>
<x-title>
    Загрузка аватара
</x-title>
    <x-input type="file" name='avatar' id="avatar" class="mt-4"/>
    <x-button type="submit" class="mt-4">Загрузить</x-button>
</x-form>
<div class="mt-5">
    <x-button-link href="{{url()->previous()}}">
        Назад</x-button-link>
</div>
@endsection