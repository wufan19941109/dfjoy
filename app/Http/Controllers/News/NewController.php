<?php

namespace App\Http\Controllers\News;

use App\Models\cases;
use App\Models\kf;
use App\Models\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function getAttr(){

        return  $data=[
            'kf'=>kf::all(),
            'news'=>news:: where([])->offset(0)->limit(5)->get(),
            'cases'=>cases:: where([])->offset(0)->limit(5)->get(),
        ];
    }
    // 单个新闻
    public function New(int $id){
        $dataMain = $this->getAttr();
        $NewOne = news::where('id',$id)->get();
        $imgArray = explode(',', $NewOne[0]['newsImgs']);
        $TJNews = news:: where([])->offset(0)->limit(10)->get();

        return view('index/html/index/New',compact('dataMain','NewOne','imgArray','TJNews'));
    }
}
