<?php

namespace App\Http\Controllers\Cases;

use App\Models\cases;
use App\Models\kf;
use App\Models\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{


    public function getAttr(){

        return  $data=[
            'kf'=>kf::all(),
            'news'=>news:: where([])->offset(0)->limit(5)->get(),
            'cases'=>cases:: where([])->offset(0)->limit(5)->get(),
        ];
    }


    //单个项目案例
    public function case(int $id){
        $dataMain = $this->getAttr();

        $case = cases::where('id',$id)->get();
        $imgArray = explode(',', $case[0]['caseImgs']);
        $TJCases = cases:: where([])->offset(0)->limit(3)->get();
        return view('index/html/index/case',compact('dataMain','case','imgArray','TJCases'));
    }
}
