<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
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
        if ($this->isLogin() && $request->is('admin*')) {
            return $next($request);
        } else {
            return redirect('home');
        }
    }

    private function isLogin()
    {
        // Implement your logic to check if the user is logged in.
        // For example, you might check the auth status using Laravel's built-in Auth::check() method.
        return true;
    }
}
