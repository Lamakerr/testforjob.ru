<?php

namespace App\Http\Controllers\User;

use App\Filters\PostFilters;
use App\Filters\PostFilter;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Image;

class PostController extends Controller
{
    public function index(PostFilter $request)
    {  
     
    $users = User::all();
    $posts = Post::filter($request)->paginate(3);
    $categories=Category::all();

   return view('user.posts.index', compact('posts','users','categories'));

    }

    public function create()

    {
        $user = User::where('id', Auth::user()->id)->first();
        $categories=Category::all();

        return  view('user.posts.create', compact('user', 'categories'));

    }

    public function store(StorePostRequest $request)

    {   
        $post = new Post();
        $post->title=$request->title;
        $post->content=$request->content;
        $post->user_id=auth()->id();
        $post->image='test';
        $post->slug=$request->slug;
        $post->anonse=$request->anonse;
        $post->category_id=$request->category_id;
        $post->save();

        alert('Cтатья успешно создана!', $post->title);

        return redirect()->route('user.posts.show', $post->id);

    }

    public function show($id)

    { //  $user_id=Post::where('user_id',"=", $id);
    //     dd($user_id);
        $user = User::where('id', Auth::user()->id)->first();
        $post=Post::find($id);
        return  view('user.posts.show',compact('post', 'user'));
}


    public function edit($id)

    { 
        $CurrentUserId=Auth::id();
        $post=Post::find($id);
       if($post->user_id!==$CurrentUserId) {
           alertred("Вы не создавали этот пост!");
           return redirect()->route('user.posts');
       }
        $user = User::where('id', Auth::user()->id)->first();
        $post=Post::find($id);
        return  view('user.posts.edit',compact('post', 'user'));

    }

    public function update(UpdatePostRequest $request, $id)

    {   
        $post=Post::where('id', $id)->first();
        if($request->hasFile('image'))
        {
            $path = public_path('users/posts/images/');
            $image = $request->file('image');
            $fileName=time().'_'.$id.'_image.png';
            Image::make($image)->resize(300, 300);
            $image->move($path, $fileName);
            $post->image = $fileName;
            $post->save();
         
        }
        $post->update(
        ['title' => $request->title,'anonse' => $request->anonse,
        'content' => $request->content, 'slug'=>$request->slug]);
        alert('Cтатья изменена!');

        return redirect()->route('user.posts.show', $id);

    }

    public function delete($id)

     {    
         $CurrentUserId=Auth::id();
         $post=Post::find($id);
        if($post->user_id!==$CurrentUserId) {
            alertred("Вы не создавали этот пост!");
            return redirect()->route('user.posts');
        }
          $post->delete();
          alert('Пост удален!');
         return redirect()->route('user.posts');
    }

    public function like()

    {

        return 'Лайк +1';

    }



    
}
