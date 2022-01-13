<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */

    public function definition()
    {
        return [

            'title' => Str::random(12),
            'content' => Str::random(20),
            'image' => Str::random(3),
            'anonse' => Str::random(5),
        ];
        
    }
}
