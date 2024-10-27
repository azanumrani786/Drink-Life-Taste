<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAgent
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check() && auth()->user()->is_admin == 2) { // 2 represents agent role
            return $next($request);
        }
        return redirect('home')->with('error', "You don't have agent access.");
    }
}
