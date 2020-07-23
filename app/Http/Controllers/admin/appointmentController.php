<?php

namespace App\Http\Controllers\admin;

use App\Models\appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class appointmentController extends Controller
{
    //显示预约列表
    public function index(){
        return view('admin/html/appointment');
    }

    // 预约列表
    public function appointmentList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['name','like',"%{$kw}%"];
        }
        $query = appointment::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];
        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

        ];

    }

    //预约del
    public function  appointmentDel(int $id){
        if(appointment::destroy($id)){
            return redirect(route('admin.appointment'));
        }


    }
}
