<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Rms_teacher;
class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if($request->path()=='log' && $request->session()->has('user')){
        //   return redirect('teachers_dashboard');
        // }
        return $next($request);
    }
}
