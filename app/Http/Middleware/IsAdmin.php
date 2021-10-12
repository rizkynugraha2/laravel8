<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    //  kalo gamau pake tanda seru pake guest bukan check, kalo pake check harus pake tanda seru
    public function handle(Request $request, Closure $next)
    {
        if(!auth()->check() || auth()->user()->username !== 'rizkynugraha') {
            abort(403);
        }
        return $next($request);
    }
}
