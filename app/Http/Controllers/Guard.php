<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Guard extends Controller
{
    public function __construct()
{
    $this->middleware(function ($request, $next) {

        $this->user = $request->user('api');

        return $next($request);
    });
}
public function user($guard = null)
{
    return call_user_func($this->getUserResolver(), $guard);
}
}
