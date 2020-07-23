<?php

namespace App\Http\Controllers\api;

use App\Models\Server;
use App\Models\cases;
use App\Models\email;
use App\Models\miniReservation;
use App\Models\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use function GuzzleHttp\Psr7\copy_to_string;
use function GuzzleHttp\Psr7\str;

class MiniController extends Controller
{
    /**
     * @return array
     * 小程序加载新闻接口
     */
   public function newsAPI(){

      $listData[]=null;
            foreach (news:: where([])->offset(0)->limit(10)->get(['id','newsImgs','newsTitle','newsDate']) as $key =>$value){
                if( strstr($value['newsImgs'], ',')){
                    $array=explode(',', $value['newsImgs']);
                   $listData[]=[
                       'id'=>$value['id'],
                       'newsImg'=>asset('').$this->img($array[0]),
                       'newsTitle' =>mb_strcut($value['newsTitle'],0,40,'utf-8').'......',
                       'newsDate'=>$value['newsDate']
                   ];
                }else{
                    $listData[]=[
                        'id'=>$value['id'],
                        'newsImg'=>asset('').$this->img($value['newsImgs']),
                        'newsTitle' =>mb_strcut($value['newsTitle'],0,40,'utf-8').'......',
                        'newsDate'=>$value['newsDate']
                    ];
                }
            }
            unset($listData[0]);

            return $listData;


   }
   /**
    * 近期热点news
    */
    public function newHot(){
        $listData[]=null;
        $arryNews =news:: whereIn('id',['25','21','20'])->get(['id','newsImgs'] );
        
        foreach ($arryNews as $key =>$value){
            if( strstr($value['newsImgs'], ',')){
                $array=explode(',', $value['newsImgs']);
               $listData[]=[
                   'id'=>$value['id'],
                   'newsImg'=>asset('').$this->img($array[0]),
                 
               ];
            }else{
                $listData[]=[
                    'id'=>$value['id'],
                    'newsImg'=>asset('').$this->img($value['newsImgs']),
                   
                ];
            }
        }
        unset($listData[0]);

     return $listData;

    }

    /**
    * 热点cases
    */
    public function caseHot(){
        $listData[]=null;
        $arryNews =cases:: whereIn('id',['12','7','9','13'])->get(['id','caseImgs'] );
        
        foreach ($arryNews as $key =>$value){
            if( strstr($value['caseImgs'], ',')){
                $array=explode(',', $value['caseImgs']);
               $listData[]=[
                   'id'=>$value['id'],
                   'caseImg'=>asset('').$this->img($array[0]),
                 
               ];
            }else{
                $listData[]=[
                    'id'=>$value['id'],
                    'caseImg'=>asset('').$this->img($value['caseImgs']),
                   
                ];
            }
        }
        unset($listData[0]);

     return $listData;

    }


        /**
         * 前端传过来的用户数据
         */
        public function reservation(Request $request){
           $data = $request->all();

           if(miniReservation::where('miniPhone',$data['miniPhone'])->count()<1){
               $data['createTime'] = date('Y-m-d H:i:s',time());
               if(miniReservation::create($data)){

                   $email=  email::all();
                   Mail::send('mail.mini',['data'=>$data],function($message1)use($email){
                       $to = $email[0]['email']; $message1 ->to($to)->subject('小程序！有新的预约信息·');
                   });
                   return $res=[
                       'code'=>200//预约成功
                   ];
               }
           }else{
               return $res=[
                   'code'=>201//重复预约
               ];
           }

        }



    /**
     * 小程序加载案例接口
     */
    public function caseApi(){

        $caseData[]=null;
        foreach (cases:: where([])->offset(0)->limit(10)->get(['id','caseImgs','caseDate','caseContent']) as $key =>$value){
            if( strstr($value['caseImgs'], ',')){
                $array=explode(',', $value['caseImgs']);
                $caseData[]=[
                    'id'=>$value['id'],
                    'caseImg'=>asset('').$this->img($array[0]),
                    'caseContent' =>mb_strcut($value['caseContent'],0,60,'utf-8').'......',
                    'caseDate'=>$value['caseDate']
                ];
            }else{
                $caseData[]=[
                    'id'=>$value['id'],
                    'caseImg'=>asset('').$this->img($value['caseImgs']),
                    'caseContent' =>mb_strcut($value['caseContent'],0,60,'utf-8').'......',
                    'caseDate'=>$value['caseDate']
                ];
            }
        }
        unset($caseData[0]);

        return $caseData;

    }


       /**
        * new详情
     * @param int $id news id
     * return code 200 成功
     *        code 404  没有id
     */
    public function newsDetail(int $id){

        if(news::where('id',$id)->count()==1){
            $data = news::where('id',$id)->get();
            $array=explode(',', $data[0]['newsImgs']);
            $img =[];
           foreach($array  as $key => $value){
              $img[] =asset('').$this->img($value);
           }
           $data[0]['newsImgs'] = $img;
           
            return [
                'newDetail' =>$data,
                'code'=>200
            ];
        }else{
            return [
                'code'=>404,
            ];
        }
    }


/**
 * 案例详情
 * return code 200 成功
     *        code 404  没有id
 */
public function caseDetail(int $id){
 
    if(cases::where('id',$id)->count()==1){
        $data = cases::where('id',$id)->get();
        $array=explode(',', $data[0]['caseImgs']);
        $img =[];
       foreach($array  as $key => $value){
          $img[] =asset('').$this->img($value);
       }
       $data[0]['caseImgs'] = $img;
       
        return [
            'caseDetail' =>$data,
            'code'=>200
        ];
    }else{
        return [
            'code'=>404,
        ];
    }
}



/**
 * indexPage server
 */
public function indexServer(Request $request){
   
    $data = Server::where('id',$request->post('id'))->value('mini');
    return explode(',', $data);
}



    //图片处理 \>/
    public function img($imgUrl){
        $temp =str_replace('\\','/',$imgUrl);
        return str_replace('../','',$temp);
    }
}
