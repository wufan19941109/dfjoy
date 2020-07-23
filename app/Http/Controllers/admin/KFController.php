<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kf;
use App\Models\kfcate;

class KFController extends Controller
{
    public function index(){

        $kfCateList = kfcate::all();
        $kfData = kf::all();
        $kfCate = kfcate::where('id',$kfData[0]['type'])->select('type')->get();
        return view('admin/html/KFUpdate',compact('kfCateList','kfData','kfCate'));
    }



    public function KFUpdateDo(Request $request){
        $data = $request->post();

        if(!Empty($data)){
            $kf = kf::all();
            kf::destroy($kf[0]['id']);
            kf::create($data);
            return redirect(route('admin.KFUpdate'));
        }

    }

}
