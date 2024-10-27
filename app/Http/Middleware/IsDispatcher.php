<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsDispatcher
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->is_admin == 3) { // 3 represents dispatcher role
            return $next($request);
        }
        return redirect('home')->with('error', "You don't have dispatcher access.");
    }
}
