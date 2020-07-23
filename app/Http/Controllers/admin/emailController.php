<?php

namespace App\Http\Controllers\admin;

use App\Models\email;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class emailController extends Controller
{
    public function index(){
        return view('admin/html/email');
    }

    public function emailList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['email','like',"%{$kw}%"];
        }
        $query = email::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];
        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

        ];

    }

    public function emailUpdate(int $id){
        $email = email::where('id',$id)->get();
        return view('admin/html/emailUpdate',compact('email'));
    }

    public function emailUpdateDo(Request $request){
       $data = $request->post();
       $data['createTime'] =  date('Y-m-d H:i:s',time());
       $id = $data['id'];
       unset($data['id']);
       unset($data['_token']);
       email::where('id',$id)->update($data);
       return redirect(route('admin.email'));
    }
}
