<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Auth\ResetPasswordController;
use App\Models\Modifier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TitlesController extends Controller
{

    public function Modifier(){
        return view('admin/html/Modifier');
    }

    public function addModifier(){
        return view('admin/html/addModifier');
    }

    public function addModifierDo(Request $request){
            if($request->isMethod('post')){
              $ModifierType = $request->post('ModifierType');
              $Modifier = $request->post('Modifier');
              $data =[
                  'type'=>$ModifierType,
                  'words' => $Modifier,
                  'createTime' =>date('Y-m-d H:i:s',time())
              ];

             if(Modifier::create($data)){
                 return redirect()->route('admin.Modifier');
             }

            }else{
                return redirect()->route('admin.error')->with(['error'=>'非法请求','route'=>'FAQCate','time'=>'2','color'=>'red']);
            }
    }

    public function ModifierDel(int $id){
       if(Modifier::destroy($id)){
           return redirect()->route('admin.Modifier');
       }else{
           dump('未知错误');
       }
    }

    public function ModifierUpdate(int $id){
        $resOne = Modifier::find($id);

        return view('admin/html/ModifierUpdate',compact('resOne'));
    }

    public function ModifierUpdateDo(Request $request){
       $data =[
           'type'=>$request->post('ModifierType'),
           'words' => $request->post('Modifier')
       ];

       if(Modifier::where('id',$request->post('ModifierId'))->update($data)){
           return redirect()->route('admin.Modifier');
       }
    }

    public function ModifierList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['words','like',"%{$kw}%"];
        }
        $query = Modifier::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];
        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

        ];
    }
}
