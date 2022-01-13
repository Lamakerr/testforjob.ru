@auth
<nav class="navbar navbar-expand-md navbar-light bg-light navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('user')}}">
      {{config('app.name')}}
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="navbar-nav me-auto my-2 my-md-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link {{ Route::is('user.categories*') ? 'active' : ''}}" aria-current="page" href="{{route('user.categories')}}">
              Категории
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::is('user.posts*') ? 'active' : ''}}" aria-current="page" href="{{route('user.posts')}}">
              Статьи
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::is('user.authors*') ? 'active' : ''}}" aria-current="page" href="{{route('user.authors')}}">
              Авторы
          </a>
        </li>
      </ul>
      <div class="btn-group" role="group">
        <img src="/users/avatars/{{auth()->user()->avatar}}" class="rounded-circle float-left" style="width:50px; height:50px;" alt="User Avatar">
        <button id="btnGroupDrop1" type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          {{auth()->user()->firstname}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          <li><a class="dropdown-item" href="{{route('user.logout')}}">Выйти с аккаунта</a></li>
          <li><a class="dropdown-item" href="{{ route('user.avatars.index')}}">Настройка профиля</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
@else
<nav class="navbar navbar-expand-md navbar-light bg-light navbar navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="{{route('home')}}">
      {{config('app.name')}}
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="navbar-nav me-auto my-2 my-md-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link {{ Route::is('blog*') ? 'active' : ''}}" aria-current="page" href="{{route('blog')}}">
              Статьи
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto my-2 my-md-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link {{ Route::is('register') ? 'active' : ''}}" aria-current="page" href="{{route('register')}}">
                Регистрация
            </a>
          </li>
          <li class="nav-item">
              <a class="nav-link {{ Route::is('login') ? 'active' : ''}}" aria-current="page" href="{{route('login')}}">
                  Авторизация
              </a>
            </li>
        </ul>
    </div>
  </div>
</nav>
@endauth

