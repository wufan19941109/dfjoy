@extends('index.main')
@section('content')
    <section class="home-section home-parallax home-fade home-full-height bg-dark bg-dark-30" id="home" data-background="{{asset('home/assets//images')}}/section-4.jpg" style="height: 969px; background-image: url(&quot;{{asset('home/assets//images')}}/section-4.jpg&quot;);">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{session('info')}}</font></font></div>
                <h3 class="font-bold"><span id="totalSecond">{{session('time')}}</span>秒后跳转至原始页</h3>
                <div class="font-alt mt-30"><a class="btn btn-border-w btn-round" href="{{route('index.index')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">返回首页</font></font></a></div>
            </div>
        </div>
    </section>
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
