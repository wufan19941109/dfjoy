<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\UserRequest;
use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //登录页面

    public function login(){
        return view('admin/html/login');
    }

    //登录处理
    public function loginDo(UserRequest $request){
        if($request->isMethod('post')){
            $data = $request->post();
            if($data['emplName'] !='' && $data['password']!=''){

                $userInfo = users::where(function ($query) use ($data){
                    $query->where('emplName', '=',$data['emplName'])->where('password','=',md5($data['password']));
                })->get();// 当前登录的用户信息  闭包 use 传值


                if(!empty($userInfo[0])){
                    session(['userId'=>$userInfo[0]->id]);
                    return redirect()->route('admin.index');
                }
//                else{
//                    return redirect()->route('admin.login')->with('error','用户名或密码错误！');
//                }
            }
//            else{
//                return redirect()->route('admin.login')->with('error','请输入用户名或密码！');
//            }

        }

    }

    //退出登录
    public function logout(){
        session()->flush();
        return redirect()->route('admin.login');
    }
}
