@extends('layouts.main')
@section('page.title', 'Авторы')
@section('main.content')
        <x-title>
                Авторы
            </x-title>
            <div class="d-flex">
                <div class="container-fluid mt-2">
                    <form class="d-flex" action="{{route('user.authors')}}" method="get">
                        <input name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif type="text" class="form-control" id="exampleFormControlInput1" placeholder="Поиск...">
                      <button class="btn btn-dark" type="submit">Поиск</button>
                    </form>
                  </div>
            </div>
           @if (empty($users))
           Статьи отсуствуют
            @else
                <div class="row">
                    @foreach ($users as $user)
                <div class="col-12 mb-3 mt-1" >
                       <div class="mt-1">
                        <a href="{{route('user.authors.show',$user->id)}}"><img src="/users/avatars/{{$user->avatar}}" class="rounded float-start flex-shrink-0" style="width:150px; height:120px;" alt="Post  Image"></a>
                       </div>
                       <div class='mt-4 text-center'>
                        <a href="{{route('user.authors.show',$user->id)}}"  class="text-center h6">{{$user->firstname}}</a>
                        <p>{{$user->lastname}} {{$user->dadname}}</p>
                       </div>
                   <x-description>
                    <div class="ms-2 mt-5">
                    </div>
                    <div  class="float-end mt-5">
                      Дата регистрации: {{$user->created_at}}
                    </div> 
                   </x-description>
                </div>
                @endforeach    
                </div>
               {{$users->links()}}
           @endif
           @endsection