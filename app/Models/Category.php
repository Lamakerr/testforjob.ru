<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected  $table = 'categories';

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }


    protected $fillable = [
        'title',
        'content',
        'image',
        'anonse',
        'slug',
    ];
}
