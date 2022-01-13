<?php

namespace App\Http\Requests\Guest;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Str;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    protected function prepareForValidation() :void 
    { 
        $fio = $this->lastname . ' ' . $this->firstname . ' ' . $this->dadname;
        $this->merge([ 
            'slug' => ($this->slug) ?? Str::slug($fio, '-') 
        ]); 
    }
      /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'firstname'=>['required','string','max:50'],
            'lastname'=>['required','string', 'max:50'],
            'dadname'=>['required','string','max:50'],
            'buthday'=>['required','string', 'date'],
            'email'=>['required','string','email', 'unique:users'],
            'password'=>['required','string','max:15','min:6','confirmed'],
            'agreement'=>['accepted'], 
            'slug' => [
                'string',
                'unique:users,slug'
            ],   
        ];
    }
}
    

