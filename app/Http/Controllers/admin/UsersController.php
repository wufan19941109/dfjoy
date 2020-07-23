<?php

namespace App\Http\Controllers\admin;

use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{



    /*
     * 显示后台员工管理页面
     */
    public function index(){
        return view('admin/html/users');
    }

    /*
     * select 出员工
     */
    public function usersList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['emplName','like',"%{$kw}%"];
        }
        $query = users::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];
        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

        ];


    }

    /*
     * 添加员工
     */
    public function userAdd(){

        return view('admin/html/userAdd');
    }

    /*
     * ajax 检测用户名是否存在
     */
    public function ajaxCheckUsername(Request $request){

        $emplName = $request->post('emplName');
        $count = users::where('emplName',$emplName)->count();
        if($count>0){
            return 0;
        }else{
            return 1;
        }

    }

    /*
     * post 添加员工
     */
    public function userAddDo(Request $request){
            $data = $request->post();
            $password = $data['password'];

            unset($data['password']);
            unset($data['confirm_password']);
            $createTime = date('Y-m-d H:i:s',time());
            $data['createTime']= $createTime;
            $data['password'] = md5($password);

            users::create($data);
        return redirect()->route('admin.users');
    }

    /*
     * get删除员工
     */
    public function userDel(int $id){

        users::destroy($id);

        return redirect()->route('admin.users');
    }

    /*
     * 员工更新
     */
    public function userUpdate(int $id){
       $userInfo =  users::where('id',$id)->get();
        return view('admin/html/userUpdate',compact('userInfo'));
    }

    /*
     * post 员工更新ACTION
     */
    public function userUpdateDo(Request $request){
        $data = $request->post();
        $id = $data['id'];
        unset($data['id']);
        unset($data['_token']);
        users::where('id',$id)->update($data);
        return redirect()->route('admin.users');

    }
}
