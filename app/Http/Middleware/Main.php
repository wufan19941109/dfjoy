<?php

namespace App\Http\Middleware;


use App\Models\email;
use Closure;
use Illuminate\Support\Facades\Mail;

class Main
{


    public function handle($request, Closure $next,$pram)
    {

        $currtRoute = $request->route()->getName();


        $response = $next($request);
        if($currtRoute == $pram){
            $data = $request->post();
            $email = email::first();
            if( !empty($request->session()->isSuccess)){
                Mail::send('mail.model',['data'=>$data],function($message1)use($email){
                $to = $email['email']; $message1 ->to($to)->subject('有新的留言信息·');
            });
            }
        }
            return $response;



    }
}
