<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;

class UserAvatarController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        $userId=auth()->user()->id;
        return view('user.avatars.index', compact('userId', 'user'));
    }

    public function store(Request $request)
    {    
       $user = User::where('id', Auth::user()->id)->first();
       if($request->hasFile('avatar'))
       {
           $path = public_path('users/avatars/');
           $avatar = $request->file('avatar');
           $fileName=time().'_'.$user->id.'_avatar.png';
           Image::make($avatar)->resize(300, 300);
           $avatar->move($path, $fileName);
           $user->avatar = $fileName;
           $user->save();
        
       }
        return redirect('user');
    }
}
