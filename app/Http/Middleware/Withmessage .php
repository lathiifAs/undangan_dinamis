<?php
namespace App\Http\Middleware;

use Closure;
// use Auth;
use Illuminate\Support\Facades\Auth;

class Withmessage {

    public function handle($request, Closure $next)
    {
        $route = $request->route()->getName();
        if(date('Y-m-d') > Auth::user()->tgl_expired) {
            return redirect()->route('login')->with('error', 'Please auth!!');
        }

        return $next($request);
    }
}
