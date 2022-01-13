<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()

    {

          return 'Cтраница списка категорий';

    }

    public function create()

    {

          return 'Cтраница cоздания категории';

    }

    public function store()

    {

          return 'Запрос на создание категории';

    }

    public function show($category)

    {

          return "Cтраница просмотра категории {$category}";

    }

    public function edit($category)

    {

          return "Страница редактирования категории {$category}";

    }

    public function update()

    {

          return 'Запрос на редактирование категории';

    }

    public function delete()

    {

          return 'Запрос на удаление категории';

    }

}
