@extends('layouts.auth')
 @section('page.title', 'Регистрация')
 @section('auth.content')
          <x-card> 
              <x-card-header> 
                    <x-card-title> 
                          Регистрация
                    </x-card-title>
                    <x-slot name="right">
                       <a href="{{route('login')}}">Вход</a>
                    </x-slot>
                  </x-card-header> 
              <x-card-body> 
                  <x-form action="{{route('register.store')}}" method="post"> 
                    <x-error name='slug'/>
                             <x-form-item> 
                              <x-label class='required' title="Введите вашу фамилию">Фамилия</x-label>
                              <x-input type="text" class="form-control"  name="lastname" autofocus/>
                              <x-error name='lastname'/>
                               </x-form-item>
                               <x-form-item> 
                                 <x-label class='required' title="Введите ваше имя">Имя</x-label>
                                 <x-input type="text" class="form-control"  name="firstname"/>
                                 <x-error name='firstname'/> 
                                </x-form-item>
                                  <x-form-item> 
                                    <x-label class='required' title="Введите ваше отчество">Отчество</x-label>
                                    <x-input type="text" class="form-control"  name="dadname"/>
                                    <x-error name='dadname'/>   
                                  </x-form-item>
                                     <x-form-item> 
                                       <x-label class='required' title="Заполните дату рождения">Дата рождения</x-label>
                                       <x-input type="date" class="form-control"  name="buthday"/>
                                       <x-error name='buthday'/>   
                                        </x-form-item>
                                     <x-form-item> 
                                       <x-label class='required' title="Введите ваш существующий email">Email</x-label>
                                       <x-input type="email" class="form-control"  name="email"/>
                                       <x-error name='email'/>   
                                        </x-form-item>
                            <x-form-item> 
                               <x-label class='required' title="Пароль должен состоять из латиницы, содержать в себе числа,длина пароля должна быть неменее 6 символов.">Пароль</x-label>
                            <x-input type="password" name="password" class="form-control"/>
                            <x-error name='password'/>   
                            </x-form-item>
                            <x-form-item> 
                              <x-label class='required' title="Поле должно совпадать с полем выше">Подтвердите пароль</x-label>
                           <x-input type="password" name="password_confirmation" class="form-control"/>
                           <x-error name='password_confirmation'/>   
                           </x-form-item>
                            <x-form-item>
                              <x-checkbox name="agreement">
                                 Даю согласие на обработку моих персональных данных
                              </x-checkbox>
                              <x-error name='agreement'/>   
                            </x-form-item> 
                               <x-button type='submit' color='success'>
                                 Создать аккаунт
                               </x-button>
                    </x-form>
                </x-card-body>
            </x-card>
@endsection