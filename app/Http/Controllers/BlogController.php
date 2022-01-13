<?php

namespace App\Http\Controllers;

use App\Filters\PostFilter;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function index(PostFilter $request){

    $posts = Post::filter($request)->paginate(3);
    $categories=Category::all();
    return view('blog.index', compact('posts', 'categories'));

   } 
   
public function show($id){
    $post=Post::find($id);
   return view('blog.show', compact('post'));
   }

   public function like(){
   return view('blog.like');
   }
}
