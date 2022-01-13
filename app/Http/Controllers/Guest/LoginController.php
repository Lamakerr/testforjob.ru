<?php

namespace App\Http\Controllers\Guest;
use App\Http\Controllers\Controller;
use App\Http\Requests\Guest\StoreLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        // $user=(object)[
        //     $userprofile = User::find($id)->username;
        //     'id' => auth()->user()->id,
        //     'firstname' => auth()->user()->firstname
        //  ];
        return view('login.index');
   
    }
    public function store(Request $request){
        $data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
      
        if (Auth::attempt($data)) {
            $username=auth()->user()->firstname;
            $request->session()->regenerate();
            alert("Добро пожаловать,$username!");

            return redirect()->route('user');
        }

        return back()->withErrors([
            'auth' => 'Email или пароль введен не верно!',
        ]);
    }   
}
