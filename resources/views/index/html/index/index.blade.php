@extends('index.main')

@section('head')
    <section class="home-section home-parallax home-fade"  style="height: 500px; top: 0px;">
        <div class="hero-slider" >
            <ul class="slides">
                <li class=" bg-dark" style="background-image:url({{asset('home/assets/images')}}/section-8.jpg);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-3">您好 &amp; Welcome</div>
                            <div class="font-alt mb-40 titan-title-size-4">Joy,您身边的房屋防水专家</div><a class="section-scroll btn btn-border-w btn-round" href="#about">查看更多</a>
                        </div>
                    </div>
                </li>
                <li class=" bg-dark" style="background-image:url({{asset('home/assets/images')}}/section-9.jpg);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-3">让天下没有漏水的房屋<br/>
                            </div><a class="btn btn-border-w btn-round" href="about">查看更多</a>
                        </div>
                    </div>
                </li>
                <li class=" bg-dark" style="background-image:url({{asset('home/assets/images')}}/section-10.jpg);">
                    <div class="titan-caption">
                        <div class="caption-content">
                            <div class="font-alt mb-30 titan-title-size-3">专业验房</div>
                            <div class="font-alt mb-40 titan-title-size-4">我们提供全国性专业验房服务</div><a class="section-scroll btn btn-border-w btn-round" href="#about">查看更多</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>



@endsection
@section('css')
    <style>
        .icon-tools {
            width: 60px; height: 60px;

        }


    </style>
@endsection
@section('content')


    <section class="module-small" style="margin-top: -6%">

        <div class="container">

            <h3 class="font-alt mb-0" style="margin-top: -4%"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; color: red">预约上门勘察渗漏水情况</font></font></h3>
            <hr class="divider-w mt-10 mb-20">
            <div class="row">
                <div class="col-sm-2 mb-sm-20">
                    <div class="form-group">
                        <input class="form-control" type="text"  id="name" placeholder="您的姓名">
                    </div>
                </div>
                <div class="col-sm-2 mb-sm-20">
                    <div class="form-group">
                        <input class="form-control" type="text" id="phone" placeholder="您的联系电话">
                    </div>
                </div>
                <div class="col-sm-2 mb-sm-20">
                    <div class="form-group">
                        <input class="form-control" type="text" id="location" placeholder="您的地址">
                    </div>
                </div>

                <div class="col-sm-2 mb-sm-20">
                    <select class="form-control" id="leak">

                        @foreach($leak as $k => $v)
                            @if($k==0)
                                <option selected="selected">{{$v['location']}}</option>
                                @else
                                <option value="{{$v['location']}}">{{$v['location']}}</option>
                                @endif

                        @endforeach

                    </select>
                </div>

                <div class="col-sm-3">
                    <button class="btn btn-block btn-round btn-g" id="submit" >预约上门</button>
                </div>
            </div>
        </div>
    </section>

    <section class="module" id="services" >
        <div class="container" style="margin-top: -8%">
            <div class="row" >
                <div class="col-sm-6 col-sm-offset-3" >
                    <h1 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的业务及服务</font></font></h1>
                    <div class="module-subtitle font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">JOY是集房屋维修和房屋检测于一身的公司</font></font></div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-lightbulb"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">技术领先</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对为防水提供标准化解决方案.</font></font></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-bike"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务专业</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">有专注防水20年的行业经验.</font></font></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-tools"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">监理严格</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">为施工的每一关键节点把关.</font></font></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-gears"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">质保10年</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">承诺一次维修没有后顾之忧.</font></font></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-tools-2"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">用料考究</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对材料的把控给用户带来新的体验.</font></font></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-genius"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">专业施工团队</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">施工团队平均工龄超过10年.</font></font></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-mobile"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">免费方案</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">提供完全免费的方案.</font></font></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="features-item">
                        <div class="features-icon"><span class="icon-lifesaver"></span></div>
                        <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">正规的发票</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">提供正规的合同和发票.</font></font></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="module bg-dark-60" data-background="{{asset('home/assets/images')}}/section-6.jpg" style="background-image: url({{asset('home/assets/images')}}/section-6.jpg); margin-top: -5%">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="">
                    <div class="video-box">
                        <div class="video-box-icon"><a class="video-pop-up" href="{{asset('home/assets/video')}}/视频/TPO预焊.mp4"><span class="icon-video"></span></a></div>
                        <div class="video-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">介绍</font></font></div>
                        <div class="video-subtitle font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">观看有关我们工作施工的视频</font></font></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    {{--    服务范围--}}
    <div class="main showcase-page">

        <section class="module-medium" id="demos">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">服务范围</font></font></h1>
                        <hr class="divider-w mt-10 mb-20">
                    </div>
                </div>
                <div class="row multi-columns-row">
                    @foreach($ser as $k =>$v)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                    <a class="content-box" href="{{url('/serDetail/')}}/{{$v['id']}}" target="_blank" >
                            <div class="content-box-image"><img src="{{$v['imgs']}}" alt="Main Demo" style="width:500px;height: 213px"></div>
                            <h3 class="content-box-title font-serif">{{$v['serName']}}</h3>
                        </a>
                    </div>
                    @endforeach


                </div>
            </div>
        </section>

    </div>
    {{--项目案例--}}
    <div class="main showcase-page" style="margin-top: -4%">

        <section class="module-medium" id="demos">
            <div class="container">
                 <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h1 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">项目案例</font></font></h1>
                        <hr class="divider-w mt-10 mb-20">
                    </div>
                </div>
                <div class="row multi-columns-row">
                    @foreach($cases as $k => $v)

                    <div class="col-md-3 col-sm-6 col-xs-12"><a class="content-box" href="{{url('case')}}/{{$v['id']}}">
                            <div class="content-box-image"><img src="
                                 @if(strstr($v['caseImgs'], ','))
                                {{substr($v['caseImgs'],0,strpos($v['caseImgs'], ','))}}
                                @else
                                {{$v['caseImgs']}}
                                @endif

                            "></div>
                            <h3 class="content-box-title font-serif">{{$v['clientName']}}</h3></a></div>

                    @endforeach




                </div>
            </div>
        </section>

    </div>

    <section class="module-small bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-8 col-lg-6 col-lg-offset-2">
                    <div class="callout-text font-alt">
                        <h3 class="callout-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">想看更多案例吗？</font></font></h3>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们有更多的案例开放。</font></font></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <div class="callout-btn-box"><a class="btn btn-w btn-round" href="{{route('index.News')}}"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">查看更多案例</font></font></a></div>
                </div>
            </div>
        </div>
    </section>
    {{--    FAQ--}}
    <section class="module" style="margin-top: -2%">
        <div class="container">
            <div class="row mb-60">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                            <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常见问题</font></font></h2>
                            <div class="module-subtitle font-serif"></div>
                        </div>
                    </div>
                    <form role="form" method="get" action="">
                        <div class="search-box">
                            <input class="form-control" type="text" placeholder="搜索...">
                            <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs font-alt" role="tablist">
                            @foreach($FAQCateList as $k => $v)
                                @if($k==0)
                                 <li class="active"><a href="#{{$v['cateName']}}" data-toggle="tab" aria-expanded="true"><span class="icon-tools-2"></span>{{$v['cateName']}}</a></li>
                                @else
                                    <li ><a href="#{{$v['cateName']}}" data-toggle="tab" aria-expanded="true"><span class="icon-tools-2"></span>{{$v['cateName']}}</a></li>
                                @endif
                                    @endforeach
{{--                            <li><a href="#sales" data-toggle="tab"><span class="icon-tools-2"></span>验房</a></li>--}}
                        </ul>
                        <div class="tab-content">
                            @foreach($FAQCateList as $k => $v)
                                @if($k==0)
                                <div class="tab-pane active" id="{{$v['cateName']}}">
                                    <div class="panel-group" id="accordion">
                                        @foreach($FAQ as $key => $value)
                                            @if($value['cate'] ==$v['id'])
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support{{$key+1}}">{{$value['question']}}</a></h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="support{{$key+1}}">
                                                <div class="panel-body">{{$value['answer']}}
                                                </div>
                                            </div>
                                        </div>
                                            @endif
                                            @endforeach
                                    </div>
                                </div>
                                @else
                                    <div class="tab-pane" id="{{$v['cateName']}}">
                                        <div class="panel-group" id="accordion">
                                            @foreach($FAQ as $key => $value)
                                                @if($value['cate'] ==$v['id'])
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title font-alt"><a data-toggle="collapse" data-parent="#accordion" href="#support{{$key+1}}">{{$value['question']}}</a></h4>
                                                        </div>
                                                        <div class="panel-collapse collapse" id="support{{$key+1}}">
                                                            <div class="panel-body">{{$value['answer']}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>

             </div>
        </div>
        <h3 id="yuyue"></h3>
    </section>



    {{--    服务--}}
    <section class="module pb-0" style="margin-top: -10%">
        <div class="container" >
            <div class="row">

                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">尊享服务</font></font></h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
            <hr class="divider-w mt-10 mb-20">
            <div class="works-grid works-grid-masonry works-hover-w works-grid-4" style="position: relative; height: 267px;">
                <div style="float: left;width:31%;height:100%;border-radius:10px">

                    <div style="float: top;width: 100%;height: 60%;" >
                        <div style="float:left;width: 49.5%;height: 99%;border-radius:10px">
                            <img src="{{asset('home/assets')}}/images/server/query.png"  class="serPic" style="-webkit-filter: grayscale(100%);" alt="">
                        </div>
                        <a href="http://wpa.qq.com/msgrd?v=3&uin={{$dataMain['kf'][0]['number']}}&site=qq&menu=yes" target="_blank">
                        <div style="float:left;width: 49.5%;height: 99%;border-radius:10px;margin-left: 1%">
                            <img src="{{asset('home/assets')}}/images/server/LJ.png"  class="serPic" style="-webkit-filter: grayscale(100%);"  alt="">
                        </div>
                        </a>

                    </div>
                    <a href="http://wpa.qq.com/msgrd?v=3&uin={{$dataMain['kf'][0]['number']}}&site=qq&menu=yes" target="_blank">
                    <div style="float: top;width: 100%;height: 30%;border-radius:10px">
                        <img src="{{asset('home/assets')}}/images/server/ser.png"  class="serPic" style="-webkit-filter: grayscale(100%);" height="90%"  alt="">

                    </div>
                    </a>


                </div>

                <div style="float: left;width: 47%;height: 100%;;margin-left: 1%;border-radius:10px">
                    <div style="float: top;width: 100%;margin-top: -2%" align="center">
                        <h4 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;color: #fec163" size="5px">维修要花多少钱？</font></font></h4>
                        <hr class="divider-w mt-10 mb-20">
                    </div>
                    <div style="float: top;width: 100%;margin-left: 10%;margin-top:10% ">
                        <form class="row">
                            <div class="col-sm-5 mb-sm-20">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="bname" placeholder="您的姓名">
                                </div>
                            </div>
                            <div class="col-sm-5 mb-sm-20">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="bphone" placeholder="您的联系电话">
                                </div>
                            </div>

                            <div class="col-sm-5 mb-sm-20">
                                <div class="form-group">
                                    <input class="form-control" type="text" id="blocation" placeholder="您的地址">
                                </div>
                            </div>

                            <div class="col-sm-5 mb-sm-20">
                                <select class="form-control" id="bleak">

                                    @foreach($leak as $k => $v)
                                        @if($k==0)
                                            <option selected="selected">{{$v['location']}}</option>
                                        @else
                                            <option value="{{$v['location']}}">{{$v['location']}}</option>
                                        @endif

                                    @endforeach

                                </select>

                            </div>
                        </form>
                    </div>
                    <div style="float: top; width: 100%;margin-top: 9%">
                        <div class="col-sm-12">
                            <p>
                                <button class="btn btn-g btn-circle btn-block" id="bsubmit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">立即获得报价</font></font></button>
                            </p>
                        </div>
                    </div>
                </div>
                <div style="float:left;width: 20%;height: 100%;margin-left: 1%;border-radius:10px">
                    <div style="float: top;height: 70%;">
                        <img src="{{asset('home/assets')}}/images/server/QR.png"  alt="">
                    </div>
                    <div style="float: top;height: 30%;" align="center">
                        <p> <font size="3px">扫一扫，人工报价</font></p>
                        <font size="3px">24h电话：0512 6766 2589</font>
                    </div>
                </div>
            </div>
        </div>

    </section >

    {{--    新闻--}}
    <section class="module">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">行业资讯</font></font></h2>
                    <div class="module-subtitle font-serif"></div>
                </div>

            </div>
            <hr class="divider-w mt-10 mb-20">
            <div class="row multi-columns-row post-columns">
                @foreach($News as $k => $v)
                    <div class="col-sm-6 col-md-3 col-lg-3">
                        <div class="post">
                            <div class="post-thumbnail"><a href="{{url('/New')}}/{{$v['id']}}"><img src="
                        @if(strstr($v['newsImgs'], ','))
                                    {{substr($v['newsImgs'],0,strpos($v['newsImgs'], ','))}}
                                    @else
                                    {{$v['newsImgs']}}
                                    @endif
                                        "  style=" width:460px ;height:150px"></a></div>
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
        </div>
    </section>
    {{--    成员--}}
    <section class="module" id="team" style="margin-top: -10%">
        <div >
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">我们的团队</h2>
                    <hr class="divider-w mt-10 mb-20">

                </div>
            </div>
            <div class="row">
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-2" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-item">
                        <div class="team-image"><img src="{{asset('home/assets')}}/images/team-1.jpg" alt="Member Photo">
                            <div class="team-detail">
                                <h5 class="font-alt">XXXXXXXXXXXX</h5>
                                <p class="font-serif">XXXXXXXXXXXXXXXXXXXXXXX</p>

                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">XXXXXX</div>
                            <div class="team-role">XXXXXXXXXX</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-2" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-item">
                        <div class="team-image"><img src="{{asset('home/assets')}}/images/team-2.jpg" alt="Member Photo">
                            <div class="team-detail">
                                <h5 class="font-alt">XXXXXXXX</h5>
                                <p class="font-serif">XXXXXXXXXXXX</p>

                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">XXXXXX</div>
                            <div class="team-role">XXXXXXXXXXX</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-2" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-item">
                        <div class="team-image"><img src="{{asset('home/assets')}}/images/team-3.jpg" alt="Member Photo">
                            <div class="team-detail">
                                <h5 class="font-alt">XXXXXXX</h5>
                                <p class="font-serif">XXXXXXXXXX</p>

                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">XXXXXX</div>
                            <div class="team-role">XXXXXXXXX</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-2" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-item">
                        <div class="team-image"><img src="{{asset('home/assets')}}/images/team-4.jpg" alt="Member Photo">
                            <div class="team-detail">
                                <h5 class="font-alt">XXXXXXX</h5>
                                <p class="font-serif">XXXXXXXXX</p>

                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">XXXXXXX</div>
                            <div class="team-role">XXXXXXXXX</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-2" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-item">
                        <div class="team-image"><img src="{{asset('home/assets')}}/images/team-4.jpg" alt="Member Photo">
                            <div class="team-detail">
                                <h5 class="font-alt">XXXXXXX</h5>
                                <p class="font-serif">XXXXXXXXX</p>

                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">XXXXXXX</div>
                            <div class="team-role">XXXXXXXXX</div>
                        </div>
                    </div>
                </div>
                <div class="mb-sm-20 wow fadeInUp col-sm-6 col-md-2" onclick="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="team-item">
                        <div class="team-image"><img src="{{asset('home/assets')}}/images/team-4.jpg" alt="Member Photo">
                            <div class="team-detail">
                                <h5 class="font-alt">XXXXXXX</h5>
                                <p class="font-serif">XXXXXXXXX</p>

                            </div>
                        </div>
                        <div class="team-descr font-alt">
                            <div class="team-name">XXXXXXX</div>
                            <div class="team-role">XXXXXXXXX</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{--    公司--}}
    <section class="module pt-0 pb-0" id="about">
        <div class="row position-relative m-0">
            <!-- <div class="col-xs-12 col-md-6 side-image" data-background="{{asset('home/assets/images')}}/section-14.jpg" style="background-image: url({{asset('home/assets/images')}}/section-14.jpg);"></div> -->
            <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="module-title font-alt align-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的公司</font></font></h2>
                        <!-- <div class="module-subtitle font-serif align-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美妙的宁静占据了我整个灵魂，就像我全心享受的春天宜人的早晨一样。</font></font></div>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">欧洲语言是同一家族的成员。</font><font style="vertical-align: inherit;">他们分开存在是一个神话。</font><font style="vertical-align: inherit;">对于科学，音乐，体育等，欧洲使用相同的词汇。</font><font style="vertical-align: inherit;">语言仅在语法，发音和最常用的单词上有所不同。</font></font></p>
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">欧洲语言是同一家族的成员。</font><font style="vertical-align: inherit;">他们分开存在是一个神话。</font><font style="vertical-align: inherit;">对于科学，音乐，体育等，欧洲使用相同的词汇。</font></font></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="module bg-dark-60" data-background="{{asset('home/assets/images')}}/section-6.jpg" style="background-image: url({{asset('home/assets/images')}}/section-6.jpg); margin-top: 4%">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XXXXXXXXX</font></font></h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
            <div class="row multi-columns-row">
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-wallet"></span></div>
                        <h3 class="count-to font-alt" data-countto="6543"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6543</font></font></h3>
                        <h5 class="count-title font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XXXXXXXXX</font></font></h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-wine"></span></div>
                        <h3 class="count-to font-alt" data-countto="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></h3>
                        <h5 class="count-title font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XXXXXXXX</font></font></h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-camera"></span></div>
                        <h3 class="count-to font-alt" data-countto="184"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">184</font></font></h3>
                        <h5 class="count-title font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XXXXXXXXX</font></font></h5>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3">
                    <div class="count-item mb-sm-40">
                        <div class="count-icon"><span class="icon-map-pin"></span></div>
                        <h3 class="count-to font-alt" data-countto="32"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></h3>
                        <h5 class="count-title font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XXXXXXX</font></font></h5>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('js')
    <script >

        $('#submit').click(function () {

            if($('#name').val() == '' || $("#phone").val()=='' || $("#location").val() ==''|| $('#leak').val() =='') {
                alert('请填写信息')

            }else{

                let data  = new Array();
                data['name'] = $('#name').val();
                data['phone']= $('#phone').val();
                data['location']= $('#location').val();
                data['leak']= $('#leak').val();
                $.ajax({


                    type : "POST",
                    url : "{{route('index.appointment')}}",
                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    data :{name:data['name'],
                        phone:data['phone'],
                        location:data['location'],
                        leak:data['leak'],
                    },
                    //请求成功
                    success : function(result) {
                        if(result==200){
                            console.log(result);
                            alert('感谢您的预约，我们会尽快与您联系');
                        }else{
                            console.log(result);
                            alert('我们已经收到您的预约，请勿重复预约哦');
                        }
                    },
                   error:function (error) {
                       console.log(error);
                   }

                })
            }



        });



        $('#bsubmit').click(function () {

            if($('#bname').val() == '' || $("#bphone").val()=='' || $("#blocation").val() ==''|| $('#bleak').val() =='') {
                alert('请填写信息')

            }else{

                let data  = new Array();
                data['name'] = $('#bname').val();
                data['phone']= $('#bphone').val();
                data['location']= $('#blocation').val();
                data['leak']= $('#bleak').val();
                $.ajax({


                    type : "POST",
                    url : "{{route('index.appointment')}}",
                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    data :{name:data['name'],
                        phone:data['phone'],
                        location:data['location'],
                        leak:data['leak'],
                    },
                    //请求成功
                    success : function(result) {
                        if(result==200){
                            alert('感谢您的预约，我们会尽快与您联系');
                        }else{
                            alert('我们已经收到您的预约，请勿重复预约哦');
                        }
                    },
                    //请求失败，包含具体的错误信息

                })
            }



        });






        $('.serPic').mouseover(function () {
                $(this).attr('style','-webkit-filter: grayscale(0%)');
        });
        $('.serPic').mouseout(function () {
            $(this).attr('style','-webkit-filter: grayscale(100%)');
        });
    </script>
@endsection
