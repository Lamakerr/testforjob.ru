<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    
    protected  $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }

    protected $fillable = [
        'lastname','firstname','dadname' ,
        'buthday','email', 'avatar',
        'active','admin',
        'password','slug'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $date = [
        'buthday'

    ];
    protected $casts = [
        'admin' => 'boolean',
        'avtive' => 'boolean',
    ];
}