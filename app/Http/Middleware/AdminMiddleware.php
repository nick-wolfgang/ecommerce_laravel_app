<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * 
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // if(Auth::user()->admin == true ) {
        //     return redirect('/admin')->with('status', 'Access Denied! Not an Admin');
        // }
        // return $next($request);
        if (Auth::user()->admin) {
            // flashy()->error('Welcome back Admin');
            return $next($request);
        } else {
            abort(403);
        }
    }
}
