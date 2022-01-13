@extends('layouts.main')
@section('page.title', 'Категории')
@section('main.content')
        <x-title>
                Категории
                <x-slot name='right'>
                    <x-button-link href="{{route('user.categories.create')}}">
                        Cоздать
                    </x-button-link>
                </x-slot>
            </x-title>
            <div class="d-flex">
                <div class="container-fluid mt-2">
                    <form class="d-flex" action="{{route('user.categories')}}" method="get">
                        <input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif type="text" class="form-control" id="exampleFormControlInput1" placeholder="Поиск...">
                      <button class="btn btn-dark" type="submit">Поиск</button>
                    </form>
                  </div>
            </div>
           @if (empty($categories))
           Статьи отсуствуют
            @else
                <div class="row">
                    @foreach ($categories as $category)
                <div class="col-12 mb-3 mt-1" >
                       <div class="mt-1">
                        <a href="{{route('user.categories.show',$category->id)}}"><img src="/users/categories/images/{{$category->image}}" class="rounded float-start flex-shrink-0" style="width:150px; height:120px;" alt="Post  Image"></a>
                       </div>
                       <div class='mt-4 text-center'>
                        <a href="{{route('user.categories.show',$category->id)}}"  class="text-center h6">{{$category->title}}</a>
                        <p>{{$category->anonse}}</p>
                       </div>
                   <x-description>
                    <div class="ms-2 mt-5">
                    </div>
                    <div  class="float-end mt-5">
                      Дата создания: {{$category->created_at}}
                    </div> 
                   </x-description>
                </div>
                @endforeach    
                </div>
               {{$categories->links()}}
           @endif
           @endsection