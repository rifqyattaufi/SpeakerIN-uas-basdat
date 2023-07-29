<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        if (Auth::user()->role == $roles) {
            return $next($request);
        }
        
        if (Auth::user()->role == 0) {
            return redirect()->route('home');
        } else if (Auth::user()->role == 1) {
            return redirect()->route('speaker.dashboard');
        } else if (Auth::user()->role == 2) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('home');
    }
}
