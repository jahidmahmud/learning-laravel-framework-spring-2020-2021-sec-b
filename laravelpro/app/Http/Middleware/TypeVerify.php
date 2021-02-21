<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TypeVerify
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
        if ($request->session()->get('name') == 'admin') {
            return $next($request);
        } else {
            return redirect('/home/userlist');
        }
    }
}
