<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send() {
        $name = '网站测试';
        // Mail::send()的返回值为空，所以可以其他方法进行判断

        Mail::send('mail.model',['name'=>$name],function($message){
            $to = '815194127@qq.com'; $message ->to($to)->subject('dfjoy.com上的留言');
        });

    }

}
