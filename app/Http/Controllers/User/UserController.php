<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
        $posts = Post::where('user_id', $user->id)->get();
        return view('user.index', compact('user', 'posts'));
    }
}
