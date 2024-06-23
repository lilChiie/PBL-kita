<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Symfony\Component\HttpFoundation\Response;

class Guest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $user = Auth::user();

            // Mengarahkan pengguna berdasarkan peran
            if ($user->role == 'admin') {
                return redirect()->route('admin.home');
            } elseif ($user->role == 'user') {
                return redirect()->route('user.home');
            } else {
                // Jika peran tidak diketahui, redirect ke halaman default
                return redirect()->route('home');
            }
        }
        return $next($request);
    }
}
