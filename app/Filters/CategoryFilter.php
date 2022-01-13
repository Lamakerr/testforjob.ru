<?php

namespace App\Filters;

class CategoryFilter extends QueryFilter{
   
    public function search_field($search_string = ''){
        return $this->builder
            ->where('title', 'LIKE', '%'.$search_string.'%')
            ->orWhere('anonse', 'LIKE', '%'.$search_string.'%');
    }
}