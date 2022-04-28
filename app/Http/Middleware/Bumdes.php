<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
// use Auth;
use Illuminate\Support\Facades\Auth;

class Bumdes
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 'rt') {
            return redirect()->route('rt');
        }

        if (Auth::user()->role == 'bumdes') {
            return $next($request);
        }

        if (Auth::user()->role == 'bpd') {
            return redirect()->route('bpd');
        }

        if (Auth::user()->role == 'admin') {
            return redirect()->route('admin');
        }
    }
}
