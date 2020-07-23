<?php

namespace App\Http\Controllers\admin;

use App\Models\FAQ;
use App\Models\FAQCate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQCateController extends Controller
{
    //FAQ分类页面
    public function FAQCate(){
        return view('admin/html/FAQCate');
    }

    public function FAQCateList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['cateName','like',"%{$kw}%"];
        }
        $query = FAQCate::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];
        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

        ];

    }

    public function FAQCateAdd(){
        return view('admin/html/FAQCateAdd');
    }
    public function FAQCateAddDo(Request $request){
       $data =  $request->post();
       if(! FAQCate::where('cateName',$data['cateName'])->count()){
           FAQCate::create($data);
           return redirect(route('admin.FAQCate'));
       }
        return redirect()->route('admin.error')->with(['error'=>'不能创建此分类，分类重复','route'=>'FAQCate','time'=>'2','color'=>'red']);

    }

    //del
    public function FAQCateDel(int $id){

       if(!FAQ::where('cate',$id)->count()){
           FAQCate::destroy($id);
           return redirect(route('admin.FAQCate'));
       }
        return redirect()->route('admin.error')->with(['error'=>'此分类中有FAQ','route'=>'FAQCate','time'=>'2','color'=>'red']);

    }

    //update
    public function FAQCateUpdate(int $id){

        $data = FAQCate::where('id',$id)->get();

        return view('admin/html/FAQCateUpdate',compact('data'));
    }

   //updateDo
    public function FAQCateUpdateDo(Request $request){
        $data =  $request->post();
        $id = $data['id'];
        unset($data['id']);
        unset($data['_token']);
       if( !FAQCate::where('cateName',$data['cateName'])->count()){
           FAQCate::where('id',$id)->update($data);
           return redirect(route('admin.FAQCate'));
       }
        return redirect()->route('admin.error')->with(['error'=>'分类中重复','route'=>'FAQCate','time'=>'1','color'=>'red']);



    }

}
