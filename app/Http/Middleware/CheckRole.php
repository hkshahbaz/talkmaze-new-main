<?php

namespace App\Http\Middleware;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Session;
use Closure;

class CheckRole extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            Session::flash('message', 'You must be login/Register to Post Debate. Thanks'); 
            Session::flash('alert-class', 'alert-success');
            return route('login');
        }
    }
}
