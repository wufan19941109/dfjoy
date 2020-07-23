<?php

namespace App\Http\Middleware;

use App\Models\email;
use Closure;
use Illuminate\Support\Facades\Mail;

class Appointment
{

    public function handle($request, Closure $next,$pram)
    {
        $currtRoute = $request->route()->getName();


        $response = $next($request);
        if($currtRoute == $pram){


            if(!empty($request->session()->isData)){

                $name = $request->post('name');
                $phone = $request->post('phone');
                $location = $request->post('location');
                $leak = $request->post('leak');
                $data=[
                    'name' =>$name,
                    'phone' =>$phone,
                    'location' =>$location,
                    'leak'=>$leak
                ];
                    $email = email::first();

                Mail::send('mail.appointment',['data'=>$data],function($message) use($email){
                    $to = $email['email']; $message ->to($to)->subject('有新的预约信息·');
                });

            }
        }
        return $response;



    }

}
