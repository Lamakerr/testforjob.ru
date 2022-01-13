<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
        }
    public function store(StoreRegisterRequest $request){

        $path = 'users/avatars/';
        $fontPath = public_path('fonts/Oswald-Variable.ttf');
        $charLast  = strtoupper(mb_substr($request->lastname, 0, 1));
        $charFirst = strtoupper(mb_substr($request->firstname, 0, 1));
        $newAvatarName=rand(12,34353).time().'_avatar.png';
        $dest = $path.$newAvatarName;
        $createAvatar = makeAvatar($fontPath,$dest,$charFirst,$charLast);
        $avatar = $createAvatar == true ? $newAvatarName : '';
        $user = new User();
        $user->lastname=$request->lastname;
        $user->firstname=$request->firstname;
        $user->dadname=$request->dadname;
        $user->buthday=$request->buthday;
        $user->avatar=$avatar;
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->slug=$request->slug;
        $user->save();
            alert('Аккаунт успешно  создан! Добро пожаловать!');
            return redirect('user');
    }
}
