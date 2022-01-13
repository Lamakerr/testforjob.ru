<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
        $slug = $this->title; 
        $this->merge([ 
            'slug' => ($this->slug) ?? \Str::slug($slug, '-') 
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
            'title'=>['required','string','max:100'],
            'anonse'=>['required','string','max:100'],
            'content'=>['required','string'],
            'category_id'=>['string'],
            'slug' => [
                'string',
                'unique:posts,slug'
            ],   
        ];
    }
}
