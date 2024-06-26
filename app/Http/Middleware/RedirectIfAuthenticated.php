<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {


        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::user();

                // Mengarahkan pengguna berdasarkan peran
                if ($user->role == 'admin') {
                    return redirect()->route('admin.home');
                } elseif ($user->role == 'user') {
                    return redirect()->route('user.home');
                } else {
                    // Jika peran tidak diketahui, redirect ke halaman default
                    return redirect('/');
                }
            }
        }

        return $next($request);
    }
}
