<?php

namespace App\Http\Middleware;

use Closure;
use Directory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if (Auth::check() && Auth::users()->role == 1) {
        //     return $next($request);
        // }
        // return redirect('login');
        return (Auth::check() && Auth::user()->role_id == 1) ? $next($request) : redirect('loginAdmin')->withErrors(['msg' => 'Bạn không có quyền truy cập.']);
    }
}