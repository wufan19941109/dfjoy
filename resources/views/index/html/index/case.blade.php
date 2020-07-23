@extends('index.main')
@section('content')


        <div class="main">
            <section class="module bg-dark-60 portfolio-page-header" data-background="{{asset('home/assets')}}/images/banner/项目案例.jpg" style="background-image: url(#);">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">项目案例</font></font></h2>
{{--                            <div class="module-subtitle font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美妙的宁静占据了我整个灵魂，就像我全心享受的春天宜人的早晨一样。</font></font></div>--}}
                        </div>
                    </div>
                </div>
            </section>
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="post-images-slider">

                                <div class="flex-viewport" style="overflow: hidden; position: relative; height: 0px;">
                                    <ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(-1140px, 0px, 0px);">

                                        @foreach($imgArray as $k =>$v)

                                            <li  style=" margin-right: 0px; float: left; display: block;"><img src="{{$v}}" alt="博客滑块图像" draggable="false"></li>


                                        @endforeach




                                    </ul></div>

                                <ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">以前</font></font></a></li><li class="flex-nav-next"><a class="flex-next" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">下一个</font></font></a></li></ul></div>
                        </div>
                    </div>

                    <hr class="divider-w mt-60 mb-60">
                    <div class="row multi-columns-row">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="work-details">
                                <h5 class="work-details-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">项目详情</font></font></h5>
                                <p></p>
                                <ul>
                                    <li><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">客户：</font></font></strong><span class="font-serif"><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$case[0]['clientName']}}</font></font></a></span>
                                    </li>
                                    <li><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">日期：</font></font></strong><span class="font-serif"><a href="#" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$case[0]['caseDate']}}</font></font></a></span>
                                    </li>
                                    <li><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">材料购买：</font></font></strong><span class="font-serif"><a href="http://www.ljoy.cn/product" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">www.ljoy.cn</font></font></a></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-6">
                            <p>{{$case[0]['caseContent']}}</p>
                        </div>

                    </div>
                </div>
            </section>
            <hr class="divider-w">
            <section class="module">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">相关项目</font></font></h2>
                        </div>
                    </div>
                    <ul class="works-grid works-grid-gut works-grid-3 works-hover-w" id="works-grid" style="position: relative; height: 234.25px;">
                @foreach($TJCases as $k =>$v)
                        <li class="work-item illustration webdesign" style="position: absolute; left: 0px; top: 0px;"><a href="{{url('case')}}/{{$v['id']}}">
                                <div class="work-image"><img src="

                         @if(strstr($v['caseImgs'], ','))
                                    {{substr($v['caseImgs'],0,strpos($v['caseImgs'], ','))}}
                                    @else
                                    {{$v['caseImgs']}}
                                    @endif

                                " style="height: 224px"></div>
                                <div class="work-caption font-alt">
                                    <h3 class="work-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v['clientName']}}</font></font></h3>
                                    <div class="work-descr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{$v['caseDate']}}</font></font></div>
                                </div></a></li>
@endforeach


                    </ul>
                </div>
            </section>
        </div>
        <div class="scroll-up" style="display: none;"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>



@endsection
