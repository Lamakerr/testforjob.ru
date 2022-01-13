<?php

namespace App\Http\Controllers\User;

use App\Filters\AuthorFilter;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(AuthorFilter $request)

    {  
      $users = User::filter($request)->paginate(3);

          return view('user.authors.index', compact('users'));

    }

    public function show($id)

    {
      $user = User::where('id', $id)->first();
          return view('user.authors.show', compact('user'));

    }
}
