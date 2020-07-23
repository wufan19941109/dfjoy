<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\users;

class IndexController extends Controller
{
    //显示后台主页
    public function index(){

      $userInfo = users::where('id',session('userId'))->get();

        return view('admin/main',compact('userInfo'));
    }
    public function main(){
        $userInfo = users::where('id',session('userId'))->get();

        return view('admin/html/index',compact('userInfo'));
    }
    public function error(){
        return view('admin/error');
    }
}
