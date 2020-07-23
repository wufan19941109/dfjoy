<?php

namespace App\Http\Controllers\admin;

use App\Models\users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\news;
class NewsController extends Controller
{
   //news列表 页面
    public function news(Request $request){
        return view('admin/html/news');
    }


    //news list 实现
    public function newsList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['newsTitle','like',"%{$kw}%"];
        }
        $query = news::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];
        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=> $query->orderBy('id', 'desc')->offset($start)->limit($length)->get(),

        ];

    }



    //news 添加
    public function newsAdd(){
        return view('admin/html/newsAdd');
    }


    public function newsAddDo(Request $request){
          $NewsData = $request->post();
          unset($NewsData['photo']);

         $userId =  session('userId');
         $userInfo = users::where('id',$userId)->get();
        $NewsData['newsByUserName']=$userInfo[0]['nickname'];
        $NewsData['newsByUserId']=$userId;
        $NewsData['newsDate'] =date('Y-m-d H:i:s',time());
        news::create($NewsData);


        //发布数
        $userNewsNumber = $userInfo[0]['numByNews']+1;
        $data =[
            'numByNews' =>$userNewsNumber
        ];
        users::where('id',$userId)->update($data);

        return redirect(route('admin.news'));
    }

    //Update
    public function newsUpdate(int $id){

        $NewsData = news::where('id',$id)->get();
        $NewsImgs = explode(',',$NewsData[0]['newsImgs']);

        $newsContent =  html_entity_decode(($NewsData[0]['newsContent']));//数据库读取内容

        return view('admin/html/newsUpdate',compact('NewsData','NewsImgs','newsContent'));
    }




    //富文本图片上传
    public function NewsPicUp(Request $request){

        $fileArray = $request->allFiles();
        $paths = [];
        foreach ($fileArray as $key => $value){
            $fileNewName = date('YmdHis',strtotime(now())).rand(1,1000).'.'.$value->getClientOriginalExtension();

            $path=asset('').$this->img($value->move('./upload/news',$fileNewName));
           // dump($path);
//            $paths[] = $path->getPathname();
            $paths[] = $path;
        }

        return json_encode(array(
            "errno"=>0,
            "url"=>$paths
        ));

    }



    //news 删除
    public function newsDel(int $id){
        //发布数
        $userInfo = users::where('id',session('userId'))->get();
        $userNewsNumber = $userInfo[0]['numByNews']-1;
        $data =[
            'numByNews' =>$userNewsNumber
        ];
        users::where('id',session('userId'))->update($data);
        news::destroy($id);
        return redirect(route('admin.news'));
    }

    //图片处理 \>/
    public function img($imgUrl){
        $temp =str_replace('\\','/',$imgUrl);
        return str_replace('./','',$temp);
    }

}
