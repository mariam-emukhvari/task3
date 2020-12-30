<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CanPost
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->can_posts == 1){
            return $next($request);
        }
        return redirect('/');
    }
}
