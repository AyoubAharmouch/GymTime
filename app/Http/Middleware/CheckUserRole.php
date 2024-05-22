<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if ($user->role == "0") {
            return redirect()->route('admin.index');
        } elseif ($user->role == "1") {
            return redirect()->route('subscribers.index');
        }

        return $next($request);
    }
}
