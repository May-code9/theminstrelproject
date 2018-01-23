<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use App\Admin;

class IsAdmin
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
        if(Auth::check()) {
          $admin = Admin::where('user_id', Auth::user()->id)->count();
          if($admin == 1) {
            return $next($request);
          }
        } else {

          return redirect('/');
        }
    }
}
