<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()

    {

          return 'Cтраница cписка постов';

    }

    public function create()

    {

        return 'Cтраница создания поста';

    }

    public function store()

    {

        return 'Запрос на добавление поста';

    }

    public function show($post)

    {

        return "Страница просмотра поста {$post}";

    }

    public function edit($post)

    {

        return "Страница редактирования поста {$post}";

    }

    public function update()

    {

          return 'Запрос на редактирование поста';

    }

    public function delete()

    {

        return 'Запрос удаление поста';

    }

    public function like()

    {

        return 'Лайк +1';

    }



    
}
