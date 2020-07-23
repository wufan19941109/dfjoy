<?php

namespace App\Http\Controllers\tools;

use App\Models\Modifier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TitlesController extends Controller
{


   public function index(){
       $Modifier = Modifier::all();
       return view('tools/titles/index',compact('Modifier'));
   }
   public function titleBuilding(Request $request){

       $attr = $request->post('attr') != '' ?$request->post('attr'):'null';
       $ModifierId = $request->post('ModifierType') != '' ?$request->post('ModifierType'):'null';
       $keyword1 = $request->post('keyword1') != '' ?$request->post('keyword1'):'null';
       $keyword2 = $request->post('keyword2') != '' ?$request->post('keyword2'):'null';
       $keyword3 = $request->post('keyword3') != '' ?$request->post('keyword3'):'null';


       if($attr == 'null' || $keyword1 =='null' || $keyword2 == 'null' || $keyword3 == 'null' || $ModifierId=='null'){
           return redirect()->route('titles.index');
       }else{

           $segmentation = "\r\n";
           //用户所选的修饰词，转成数组
            $mods = $this->arrayWords(Modifier::find($ModifierId)->getAttributes()['words'],$segmentation);
          //keywords123  array
           $keyword1 = $this->arrayWords($keyword1,$segmentation);
           $keyword2 = $this->arrayWords($keyword2,$segmentation);
           $keyword3 = $this->arrayWords($keyword3,$segmentation);

           //属性词 ， 转成数组
           $attr = $this->arrayWords($attr,$segmentation);

           //临时存放标题关键词
           $titleTemp = [];
           $keywords = [];
           for($i = 0 ; $i<count($keyword1);$i++){
               for($j = 0 ; $j<count($keyword2);$j++){
                   for($k=0; $k<count($keyword3);$k++){
                       for($l=0 ; $l<count($attr); $l++){
                           $titleTemp[] = $attr[$l].' '.$keyword1[$i].' '.$keyword2[$j].' '.$keyword3[$k];
                           $keywords[] = $keyword1[$i].'|'.$keyword2[$j].'|'.$keyword3[$k];
                       }

                   }

               }
           }

            //存放标题
           $title = [];

           for($i = 0 ; $i<count($titleTemp) ; $i++){
               $title[] =  implode(" ",array_unique( $this->arrayWords($titleTemp[$i],' ')));
           }







           if(count($mods)>=count($attr)*count($keyword1)*count($keyword2)*count($keyword3)){
               $tempKey= array_rand($mods,count($attr)*count($keyword1)*count($keyword2)*count($keyword3));

               $arrayMods = [];//对应的修饰词


              if(is_array($tempKey)){
                  for($i=0 ; $i<count($tempKey); $i++){
                      $arrayMods[] =$mods[$tempKey[$i]] ;
                  }
              }else{
                    $arrayMods []= $mods[$tempKey];
              }




               $newTitle =[];
               for($i=0,$j=0 ; $i<count($title),$j<count($arrayMods); $i++,$j++){
                   $newTitle[] = $arrayMods[$j].' '.$title[$i];
               }

               $file = fopen('../public/upload/buildTitle.xls', 'w');

               for($i = 0 ; $i<count($newTitle); $i++){
                  $str= explode('|',$keywords[$i]);

                   fwrite($file, "$newTitle[$i]\t$str[0]\t$str[1]\t$str[2]\n");
               }

               fclose($file);
                echo '<button>
                            <a href = "../upload/buildTitle.xls">
                            下载文件
                        </button>';


           }else{
               $number =intval( count($attr)*count($keyword1)*count($keyword2)*count($keyword3)/count($mods) +1);

               $array=[];
               for($i= 0 ; $i<$number;$i++){
                   $array[] = array_merge($mods,$mods);
               }

               $fail =[];
               for($i=0 ; $i<count($array); $i++){
                   for($j =0; $j<count($array[$i]); $j++){
                       $fail[] = $array[$i][$j];
                   }
               }

               //fail 是mods的增量版
               $tempKey=array_rand($fail,count($attr)*count($keyword1)*count($keyword2)*count($keyword3));
               $arrayMods = [];//对应的修饰词
               for($i=0 ; $i<count($tempKey); $i++){

                   $arrayMods[] =$fail[$i] ;
               }


               $newTitle =[];
               for($i=0,$j=0 ; $i<count($title),$j<count($arrayMods); $i++,$j++){
                   $newTitle[] = $arrayMods[$j].' '.$title[$i];
               }

               $file = fopen('../public/upload/buildTitle.xls', 'w');

               for($i = 0 ; $i<count($newTitle); $i++){
                   $str= explode('|',$keywords[$i]);

                   fwrite($file, "$newTitle[$i]\t$str[0]\t$str[1]\t$str[2]\n");

               }

               fclose($file);
               echo '<button>
                            <a href = "../upload/buildTitle.xls">
                            下载文件
                        </button>';


           }



       }


   }




    /**
     * @param string $arrayWord
     * @return false|string[]
     */
   public function arrayWords(string $arrayWord,string $str){

       $mods=  explode($str,$arrayWord);
       for($i = 0; $i<count($mods);$i++){
           if($mods[$i]==''){
               unset($mods[$i]);
           }
       }

       return $mods;
   }



    /**
    单词单数转成复数
    @param $string 单词单数
     */
    function pluralize( $string ) {
        $plural = array(
            array( '/(quiz)$/i', "$1zes" ),
            array( '/^(ox)$/i', "$1en" ),
            array( '/([m|l])ouse$/i', "$1ice" ),
            array( '/(matr|vert|ind)ix|ex$/i',"$1ices" ),
            array( '/(x|ch|ss|sh)$/i', "$1es" ),
            array( '/([^aeiouy]|qu)y$/i', "$1ies" ),
            array( '/([^aeiouy]|qu)ies$/i', "$1y" ),
            array( '/(hive)$/i', "$1s" ),
            array( '/(?:([^f])fe|([lr])f)$/i',"$1$2ves" ),
            array( '/sis$/i', "ses" ),
            array( '/([ti])um$/i', "$1a" ),
            array( '/(buffal|tomat)o$/i', "$1oes" ),
            array( '/(bu)s$/i', "$1ses" ),
            array( '/(alias|status)$/i', "$1es" ),
            array( '/(octop|vir)us$/i', "$1i" ),
            array( '/(ax|test)is$/i', "$1es" ),
            array( '/s$/i', "s" ),
            array( '/$/', "s" )
        );
        $singular = array(
            array("/s$/", ""),
            array("/(n)ews$/", "$1ews"),
            array("/([ti])a$/", "$1um"),
            array("/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/", "$1$2sis"),
            array("/(^analy)ses$/", "$1sis"),
            array("/([^f])ves$/", "$1fe"),
            array("/(hive)s$/", "$1"),
            array("/(tive)s$/", "$1"),
            array("/([lr])ves$/", "$1f"),
            array("/([^aeiouy]|qu)ies$/","$1y"),
            array("/(s)eries$/", "$1eries"),
            array("/(m)ovies$/", "$1ovie"),
            array("/(x|ch|ss|sh)es$/", "$1"),
            array("/([m|l])ice$/", "$1ouse"),
            array("/(bus)es$/", "$1"),
            array("/(o)es$/", "$1"),
            array("/(shoe)s$/", "$1"),
            array("/(cris|ax|test)es$/","$1is"),
            array("/([octop|vir])i$/", "$1us"),
            array("/(alias|status)es$/","$1"),
            array("/^(ox)en/", "$1"),
            array("/(vert|ind)ices$/", "$1ex"),
            array("/(matr)ices$/", "$1ix"),
            array("/(quiz)zes$/", "$1")
        );

        $irregular = array(
            array( 'move', 'moves' ),
            array( 'sex', 'sexes' ),
            array( 'child', 'children' ),
            array( 'man', 'men' ),
            array( 'person', 'people' )
        );

        $uncountable = array(
            'sheep',
            'fish',
            'series',
            'species',
            'money',
            'rice',
            'information',
            'equipment'
        );

        if ( in_array( strtolower( $string ), $uncountable ) ) return $string;

        foreach ( $irregular as $noun ){
            if ( strtolower( $string ) == $noun[0] )
                return $noun[1];
        }

        foreach ( $plural as $pattern ){
            if ( preg_match( $pattern[0], $string ) )
                return preg_replace( $pattern[0], $pattern[1], $string );
        }
       return  $string;
    }



}
