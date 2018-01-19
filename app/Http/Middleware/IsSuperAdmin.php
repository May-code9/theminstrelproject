<?php

namespace App\Http\Middleware;

use Closure;
use App\Admin;
use Auth;

class IsSuperAdmin
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
        $isAdmin = Admin::where('isAdmin', 1);
        $isSuperAdmin = Admin::where('role', 5);
        if(Auth::user() && $isAdmin && $isSuperAdmin) {
          return $next($request);
        }
        return redirect('/');
    }
}
