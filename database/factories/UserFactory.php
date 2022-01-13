<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'lastname'=>$this->faker->name,
            'firstname'=>$this->faker->name,
            'dadname'=>$this->faker->name,
            $fio = $this->lastname . ' ' . $this->firstname . ' ' . $this->dadname,
            'buthday'=>now(),
            'email'=>Str::random(6).'@gmail.com', 
            'avatar'=>Str::random(6).'_avatar.png',
            'active'=>'1',
            'admin'=>'0',
            'password'=>Hash::make('password'),
            'slug'=> ($this->slug) ?? Str::slug($fio, '-'),
        ];
    }
}
