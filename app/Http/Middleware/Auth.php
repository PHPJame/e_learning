<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Auth
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
        if (auth()->user()->status_id == 1) {
            return $next($request);
            return redirect('ADHome')->with('ไม่สำเร็จ', "คุณไม่มีสิทธิ์เข้าถึง");
        } else if (auth()->user()->status_id == 2) {
            return $next($request);
            return redirect('TCHome')->with('ไม่สำเร็จ', "คุณไม่มีสิทธิ์เข้าถึง");
        }
    }
}