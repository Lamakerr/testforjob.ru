<?php

namespace App\Filters;

class AuthorFilter extends QueryFilter{
   
    public function search_field($search_string = ''){
        return $this->builder
            ->where('firstname', 'LIKE', '%'.$search_string.'%')
            ->orWhere('lastname', 'LIKE', '%'.$search_string.'%');
    }
}