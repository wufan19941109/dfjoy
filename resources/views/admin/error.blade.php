@extends('admin.public')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="middle-box text-center animated fadeInRightBig">
                    <span style="font-size: 40px;color:{{session('color')}}" class="font-bold">{{session('error')}}</span>
                    <h3 class="font-bold"><span id="totalSecond">{{session('time')}}</span>秒后跳转至首页</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script language="javascript" type="text/javascript">
        let second = totalSecond.innerText;
        setInterval("redirect()", 1000);
        function redirect(){
            totalSecond.innerText=--second;
            if(second<0) location.href="{{session('route')}}";
        }
    </script>
@endsection
