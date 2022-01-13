<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->isAdmin($request)){


            return $next($request);
        }
        abort(403);
    }
    
    protected function isAdmin(Request $request)
    {
        return true;
    }

}
