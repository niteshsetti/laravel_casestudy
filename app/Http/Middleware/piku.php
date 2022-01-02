<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class piku
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('data')){
            return redirect('/login')->with('error','Login-First');
        }
        else{
            return redirect('/login')->with('error','Login-First');
        }
        return $next($request);
    }
}
