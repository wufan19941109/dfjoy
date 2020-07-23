@extends('tools.main')
@section('content')
    <div class="container">

        <div align="center"><h1>标题组建</h1><h5>version 2.0 </h5></div>
        <a href="{{route('tools.index')}}"><button type="button" class="btn btn-info">其他功能</button></a>
        <form role="form" method="get" action="{{route('titles.titleBuilding')}}" >
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name"><h3>属性词</h3></label>
                        <textarea  class="form-control" name="attr" rows="7" cols="1" placeholder="一行一组属性词" id="attr" ></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name"><h3>关键词1</h3></label>
                        <textarea class="form-control" name="keyword1" rows="7" cols="1" placeholder="一行一个关键词" id="keyword1"></textarea>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name"><h3>关键词2</h3></label>
                        <textarea class="form-control" name="keyword2" rows="7" cols="1" placeholder="一行一个关键词" id="keyword2"></textarea>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name"><h3>关键词3</h3></label>
                        <textarea class="form-control"  name="keyword3" rows="7" cols="1" placeholder="一行一个关键词" id="keyword3"></textarea>
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="name">修饰词列表</label>
                        <select class="form-control" name="ModifierType" >

                          @foreach($Modifier as $k =>$v)
                                <option value="{{$v['id']}}">{{$v['type']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <a href="{{route('admin.addModifier')}}"><button type="button" class="btn btn-primary">添加修饰词</button></a>

                </div>
            </div>
            <div align="center">
            <div class="row">
                <div class="col-md-3">


                </div>
                <div class="col-md-3">
                    <button  type="submit" id="sub" class="btn btn-success">提交</button>

                </div>
                <div class="col-md-3">
                <button type="reset" class="btn btn-danger">重置</button>
                </div>
            </div>
            </div>
        </form>
        </div>


    </div>
    <div class="container" style="margin-top:5%">
    <ul>
    <h3><li><b>为了服务器性能，属性词，关键词均不能超过50个</b></li></h3>

</ul>
    </div>

@endsection

@section('js')
 <script>

     $('#sub').click((event)=>{
         let $attr = $('#attr').val();
         let $keyword1 = $('#keyword1').val();
         let $keyword2 = $('#keyword2').val();
         let $keyword3 = $('#keyword3').val();

         let $count =50;

         if(($keyword1.split(`\n`)).length-1 >$count){
             alert('关键词1不能超过'+$count+'个');
             event.preventDefault();
         }else if(($keyword2.split(`\n`)).length-1 >$count){
             alert('关键词2不能超过'+$count+'个');
             event.preventDefault();
         }else if(($keyword3.split(`\n`)).length-1 >$count){
             alert('关键词3不能超过'+$count+'个');
             event.preventDefault();
         }else if(($attr.split(`\n`)).length-1 >$count){
             alert('属性词不能超过'+$count+'个');
             event.preventDefault();
         }else if ($attr ==''){
             alert('属性词不能为空');
             event.preventDefault();
         }else if ($keyword1 ==''){
             alert('关键词1不能为空');
             event.preventDefault();
         }else if ($keyword2 ==''){
             alert('关键词2不能为空');
             event.preventDefault();
         }else if ($keyword3 ==''){
             alert('关键词3不能为空');
             event.preventDefault();
         }







     });

 </script>
@endsection
