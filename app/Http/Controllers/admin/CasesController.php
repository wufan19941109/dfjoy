<?php

namespace App\Http\Controllers\admin;

use App\Models\cases;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{
    public function cases(){
        return view('admin/html/cases');
    }


    /*
   * select 出case
   */
    public function casesList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['clientName','like',"%{$kw}%"];
        }
        $query = cases::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];
        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

        ];


    }

    //添加案例页面
    public function caseAdd(){
        return view('admin/html/caseAdd');
    }

    //post添加案例
    public function caseAddDo(Request $request){
       $data = $request->post();
       unset($data['photo']);
       cases::create($data);
       return redirect(route('admin.cases'));

    }

    //修改案例
    public function caseUpdate(int $id){
        $caseData = cases::where('id',$id)->get();

        $caseImgs = explode(',',$caseData[0]['caseImgs']);
        return view('admin/html/caseUpdate',compact('caseData','caseImgs'));
    }


    //post修改案例
    public function caseUpdateDo(Request $request){
           $updateDate = $request->post();
            unset($updateDate['_token']);
           unset($updateDate['photo']);
           $id = $updateDate['id'];
           unset($updateDate['id']);

           cases::where('id',$id)->update($updateDate);
        return redirect(route('admin.cases'));
    }



    //删除案例
    public function caseDel(int $id){
            cases::destroy($id);
        return redirect(route('admin.cases'));
    }


    //上传主图
    public function casePicUp(Request $request){
        $paths= [];
        $fileArray = $request->file('imgs');
        foreach ($fileArray as $key => $value){
            $fileNewName = date('YmdHis',strtotime(now())).rand(1,1000).'.'.$value->getClientOriginalExtension();
            $path=$value->move('.\\upload\\case\\',$fileNewName);
            $paths[] = '.'.$path->getPathname();

        }
        return json_encode(array(
            "errno"=>0,
            "url"=>$paths
        ));


    }
}
