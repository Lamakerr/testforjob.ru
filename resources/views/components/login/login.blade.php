<x-card> 
    <x-card-header> 
          <x-card-title> 
                Вход      
          </x-card-title>
          <x-slot name='right'>
              <a href="{{route('register')}}">Регистрация</a>
          </x-slot>
        </x-card-header>
        <x-error name='auth'/>  
    <x-card-body> 
        <x-form action="{{route('login.store')}}" method="post"> 
                  <x-form-item> 
                  <x-label class='required'>Email</x-label>
                  <x-input type="email" class="form-control" name="email" autofocus/>
                   </x-form-item>
                  <x-form-item> 
                     <x-label class='required'>Пароль</x-label>
                  <x-input type="password" name="password" class="form-control"/>
                  </x-form-item>
                  <x-form-item>
                    <x-checkbox name="remember">
                       Запомнить меня
                    </x-checkbox>
                  </x-form-item> 
                     <x-button type='submit' color='success'>
                      Войти
                     </x-button>
          </x-form>
      </x-card-body>
  </x-card>