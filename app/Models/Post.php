<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    protected  $table = 'posts';

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }

    protected $fillable = [
        'title',
        'content',
        'image',
        'anonse',
        'slug',
        'published_at',
        'user_id',
        'category_id',
    ];

    protected $date = [
        'published_at'

    ];
}