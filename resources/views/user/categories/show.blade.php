@extends('layouts.main')
@section('page.title', 'Просмотр категории')
@section('main.content')
 <div class="mt-2">
     <div class="float-start p-1">
     <img src="/users/categories/images/{{$category->image}}" class="rounded" style="width:150px; height:120px;" alt="Post  Image">
    </div>
    <div class="d-flex ms-5">
     <h3 class="h4 mt-4 ms-5">
         {{$category->title}}
     </h3>
     <div class="d-flex justify-content-end bd-highlight mb-3">
         <div class="p-2 ms-5 bd-highlight float-end">
             <x-button-link href="{{route('user.categories.edit',$category->id)}}">
                 Изменить
             </x-button-link> 
         </div>
     </div>
    </div>
 </div>
<x-description>
    <div class="container mt-5">
        <div class="row">
         <div class="col flex-justify-bitween">
             Дата создания: {{$category->created_at}}
            </div>
                 </div>
             </div>
</x-description>
 <div class="pt-3 border-bottom">
    <div class="mt-2 mb-5">
     {!!$category->content!!}
    </div> 
 </div>
 <div class="mt-5">
     <x-button-link href="{{url()->previous()}}">
         Назад</x-button-link>
 </div>
@endsection