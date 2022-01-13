<?php

namespace App\Http\Controllers\User;

use App\Filters\CategoryFilter;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class CategoryController extends Controller
{
    public function index(CategoryFilter $request)

    {  
      $user = User::where('id', Auth::user()->id)->first();
      $categories=Category::filter($request)->paginate(3);
          return view('user.categories.index', compact('categories', 'user'));

    }

    public function create()

    {
      $user = User::where('id', Auth::user()->id)->first();
          return view('user.categories.create', compact('user'));

    }

    public function store( Request $request)

    { $category = new Category();
      $category->title=$request->title;
      $category->content=$request->content;
      $category->image='test';
      $category->anonse=$request->anonse;
      $category->save();

      alert('Категория успешно создана!');

      return redirect()->route('user.categories.show', $category->id);
    }

    public function show($id)

    {     
          $user = User::where('id', Auth::user()->id)->first();
          $category=Category::find($id);
          return view("user.categories.show", compact('category', 'user'));

    }

    public function edit($id)

    {
          $user = User::where('id', Auth::user()->id)->first();
          $category=Category::find($id);
          return view("user.categories.edit",compact('category', 'user'));

    }

    public function update(Request $request, $id)

    {
      $category=Category::where('id', $id)->first();
      if($request->hasFile('image'))
      {
          $path = public_path('users/categories/images/');
          $image = $request->file('image');
          $fileName=time().'_'.$id.'_image.png';
          Image::make($image)->resize(300, 300);
          $image->move($path, $fileName);
          $category->image = $fileName;
          $category->save();
       
      }
      $category->update(
      ['title' => $request->title,'anonse' => $request->anonse,
      'content' => $request->content, 'slug'=>$request->slug]);
      alert('Категория изменена!');

      return redirect()->route('user.categories.show', $id);

    }

    public function delete()

    {

          return 'Запрос на удаление категории';

    }

}
