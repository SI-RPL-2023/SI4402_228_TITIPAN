<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->role === $role) {
            return $next($request);
        }

        if ($request->ajax()) {
            return response()->json(['message' => 'Anda tidak memiliki hak akses ke halaman ini'], 403);
        }

        return back()->withErrors('Anda tidak memiliki hak akses ke halaman ini');

    }
}
