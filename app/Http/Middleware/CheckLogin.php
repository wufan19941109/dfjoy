<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$pram)
    {
        $routeName = $request->route()->getName();//当前路由


        if($routeName != $pram && $routeName!='admin.loginDo' ){
            if(!session()->has('userId')){
                return redirect()->route('admin.login')->with('error','请登录！');
            }
        }


        return $next($request);
    }
}
