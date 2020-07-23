@extends('index.main')

@section('content')
<div class="main">
    <section class="module bg-dark-60 blog-page-header" data-background="{{asset('home/assets')}}/images/banner/新闻资讯.jpg" style="background-image: url(&quot;assets/images/blog_bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">行业资讯</font></font></h2>
{{--                    <div class="module-subtitle font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美妙的宁静占据了我整个灵魂，就像我全心享受的春天宜人的早晨一样。</font></font></div>--}}
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row multi-columns-row post-columns">
                @foreach($news as $k => $v)
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="post">
                        <div class="post-thumbnail"><a href="{{url('/New')}}/{{$v['id']}}"><img src="
                        @if(strstr($v['newsImgs'], ','))
                        {{substr($v['newsImgs'],0,strpos($v['newsImgs'], ','))}}
                                    @else
                                    {{$v['newsImgs']}}
                                @endif
                                    " alt="博客文章缩略图" style=" width:460px ;height:150px"></a></div>
                        <div class="post-header font-alt">
                            <h2 class="post-title"><a href="{{url('/New')}}/{{$v['id']}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{mb_substr($v['newsTitle'],0,14,'utf-8')}}....</font></font></a></h2>
                            <div class="post-meta"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v['newsByUserName']}}</font></font><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">发布于</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font><font style="vertical-align: inherit;">{{$v['newsDate']}}</font></font></div>
                        </div>
                        <div class="post-entry">
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{mb_substr($v['newsContent'],0,24,'utf-8')}}....</font></font></p>
                        </div>
                        <div class="post-more"><a class="more-link" href="{{url('/New')}}/{{$v['id']}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">阅读更多</font></font></a></div>
                    </div>
                </div>
                @endforeach


            </div>
            <div class="row" align="center">
                <div class="col-sm-12">
                    <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 </font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 </font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 </font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></a><a href="#"><i class="fa fa-angle-right"></i></a></div>
                </div>
            </div>
        </div>
    </section>


</div>
@endsection

