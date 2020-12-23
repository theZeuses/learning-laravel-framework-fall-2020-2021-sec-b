<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class employer
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
        if($request->session()->get('type') == 'employer'){
            return $next($request);
        }else{
            return redirect()->route('/login');
        }
    }
}
