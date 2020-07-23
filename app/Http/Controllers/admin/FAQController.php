<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\DB;
use App\Models\FAQ;
use App\Models\FAQCate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FAQController extends Controller
{
        //FQA页面
    public function FAQ(){
        return view('admin/html/FAQ');
    }

    //FAQ 列表
    public function FAQList(Request $request){
        $kw = $request->get('kw','');

        $map = [];

        if($kw){
            $map[] = ['question','like',"%{$kw}%"];
        }
        $query = FAQ::where($map);

        $start = $_POST['start'];
        $length =$_POST['length'];

//        $SQL = DB::select("SELECT `joycom_faq`.`id` FROM `joycom_faq` LEFT JOIN `joycom_FAQCate` ON `joycom_FAQ`.`cate` = `joycom_FAQCate`.`id` ORDER BY `JOYCOM_FAQ`.`id` DESC LIMIT 10 OFFSET 0");
//        $sql =$query->select('faq.id','faq.question','faq.answer','faq.createTime','FAQCate.catename')
//                ->rightJoin('FAQCate', 'FAQ.cate','FAQCate.id')
//                ->orderBy('FAQ.id','desc')
//                ->offset($start)
//                ->limit($length)
//                ->get();
//        dump($sql);

        return [
            'draw' 		 	 => $request->get('draw'),
            'recordsTotal' 	 =>$query->count(),
            'recordsFiltered' => $query->count(),
            'data'			=>$query->select('faq.id','faq.question','faq.answer','faq.createTime','faqcate.catename','faq.createTime')
                ->rightJoin('faqcate', 'faq.cate','faqcate.id')
                ->orderBy('faq.id','desc')
                ->offset($start)
                ->limit($length)
                ->get()


        ];

    }

    //FAQ  Del
    public function FAQDel(int $id){
        FAQ::destroy($id);
        return redirect(route('admin.FAQ'));
    }

    //FAQ ADD
    public function FAQAdd(){
        $cateList = FAQCate::all();
        return view('admin/html/FAQAdd',compact('cateList'));
    }

    //FAQ AddDo
    public function FAQAddDo(Request $request){

        $data = $request->post();
        $data['createTime'] = date('Y-m-d H:i:s',time());
        $data['userId'] = session('userId');
        if(!FAQ::where('question',$data['question'])->count()>0  ){
            FAQ::create($data);
            return redirect(route('admin.FAQ'));
        }

        return redirect()->route('admin.error')->with(['error'=>'问题重复','route'=>'FAQ','time'=>'1','color'=>'red']);


    }

    //FAQ   update
    public function FAQUpdate(int $id){

       $data =  FAQ::where('id',$id)->get();
       $cateList = FAQCate::ALL();
        return view('admin/html/FAQUpdate',compact('data','cateList'));
    }

    //FAQUpdate do
    public function FAQUpdateDo(Request $request){
        $data = $request->post();
        $id = $data['id'];
        unset($data['id']);
        unset($data['_token']);

        if(!FAQ::where('question',$data['question'])->count()>0){
            FAQ::where('id',$id)->update($data);
        }
        return redirect()->route('admin.error')->with(['error'=>'问题重复','route'=>'FAQ','time'=>'1','color'=>'red']);

    }
}
