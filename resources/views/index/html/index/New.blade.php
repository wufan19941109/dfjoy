@extends('index.main')
@section('content')
    <main>
        <div class="page-loader" style="display: none;">
            <div class="loader" style="display: none;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">载入中...</font></font></div>
        </div>

        <div class="main">
            <section class="module bg-dark-60 blog-page-header" data-background="{{asset('home/assets')}}/images/banner/新闻资讯.jpg" style="background-image: url(&quot;assets/images/blog_bg.jpg&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">行业资讯</font></font></h2>
{{--                            <div class="module-subtitle font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美妙的宁静占据了我整个灵魂，就像我全心享受的春天宜人的早晨一样。</font></font></div>--}}
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-3 sidebar">
                            <div class="widget">
                                <form role="form">
                                    <div class="search-box">
                                        <input class="form-control" type="text" placeholder="搜索...">
                                        <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </div>

                            <div class="widget">
                                <h5 class="widget-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">热门资讯</font></font></h5>
                                <ul class="widget-posts">
                                   @foreach($TJNews as $k =>$v)
                                    <li class="clearfix">
                                        <div class="widget-posts-image"><a href="{{url('/New')}}/{{$v['id']}}"><img src="

                                       @if(strstr($v['newsImgs'], ','))
                                                {{substr($v['newsImgs'],0,strpos($v['newsImgs'], ','))}}
                                                @else
                                                {{$v['newsImgs']}}
                                                @endif



                                                    " alt="发表缩图"></a></div>
                                        <div class="widget-posts-body">
                                            <div class="widget-posts-title"><a href="{{url('/New')}}/{{$v['id']}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{mb_substr($v['newsTitle'],0,14,'utf-8')}}....</font></font></a></div>
                                            <div class="widget-posts-meta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v['newsDate']}}</font></font></div>
                                        </div>
                                    </li>
                                    @endforeach



                                </ul>
                            </div>



                        </div>
                        <div class="col-sm-8 col-sm-offset-1">




                            <div class="post">
                                <div class="post-images-slider">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative; height: 0px;">
                                        <ul class="slides" style="width: 800%; transition-duration: 0s; transform: translate3d(-750px, 0px, 0px);">

                                            @foreach($imgArray as $k =>$v)

                                            <li  style="width: 750px; margin-right: 0px; float: left; display: block;"><img src="{{$v}}" alt="博客滑块图像" draggable="false"></li>


                                            @endforeach


                                        </ul>
                                    </div>

                                    <ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">以前</font></font></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一个</font></font></a></li></ul></div>
                               @foreach($NewOne as $k =>$v)
                                <div class="post-header font-alt">
                                    <h2 class="post-title"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v['newsTitle']}}</font></font></a></h2>
                                    <div class="post-meta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v['newsByUserName']}}</font></font><a href="#"><font style="vertical-align: inherit;">发布于</font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> </font><font style="vertical-align: inherit;">{{$v['newsDate']}}</font><font style="vertical-align: inherit;"> </font></font>
                                    </div>
                                </div>
                                <div class="post-entry">
                                    <p id="serDetail">
                                        {{$v['newsContent']}}
                                    </p>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="scroll-up" style="display: block;"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    </main>


@endsection
@section('js')
    <script !src="">



       $('#serDetail').html(HTMLDecode($('#serDetail').html()));

        function HTMLDecode(text) {
            var temp = document.createElement("div");
            temp.innerHTML = text;
            var output = temp.innerText || temp.textContent;
            temp = null;
            return output;
        }
    </script>
@endsection
