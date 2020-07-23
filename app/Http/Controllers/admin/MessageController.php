<?php

namespace App\Http\Controllers\admin;

use App\Models\message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
   public function index(){
       return view('admin/html/message');
   }

   public function messageList(Request $request){

       $kw = $request->get('kw','');

       $map = [];

       if($kw){
           $map[] = ['message','like',"%{$kw}%"];
       }
       $query = message::where($map);

       $start = $_POST['start'];
       $length =$_POST['length'];
       return [
           'draw' 		 	 => $request->get('draw'),
           'recordsTotal' 	 =>$query->count(),
           'recordsFiltered' => $query->count(),
           'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

       ];

   }

   public function messageDel(int $id){

       if(!empty($id)){
           message::destroy($id);
           return redirect(route('admin.message'));
       }

   }

   public function messageView(int $id){

       $msgData = message::where('id',$id)->get();
       return view();

   }
}
