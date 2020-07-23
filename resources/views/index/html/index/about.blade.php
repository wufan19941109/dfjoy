@extends('index.main')
@section('content')

        <section class="module bg-dark-60 about-page-header" data-background="{{asset('home/assets')}}/images/banner/关于我们.jpg" style="background-image: url(#);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">关于我们</font></font></h2>
{{--                        <div class="module-subtitle font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美妙的宁静占据了我整个灵魂，就像我全心享受的春天宜人的早晨一样。</font></font></div>--}}
                    </div>
                </div>
            </div>
        </section>

        <section class="module pt-0 pb-0" id="about" style="margin-top: 5%">
            <div class="row position-relative m-0">
                <div class="col-xs-12 col-md-6 side-image" data-background="{{asset('home/assets')}}//images/section-14.jpg" style="background-image: url(#);"></div>
                <div class="col-xs-12 col-md-6 col-md-offset-6 side-image-text">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="module-title font-alt align-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的办公室</font></font></h2>
                            <div class="module-subtitle font-serif align-left"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美妙的宁静占据了我整个灵魂，就像我全心享受的春天宜人的早晨一样。</font></font></div>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">欧洲语言是同一家族的成员。</font><font style="vertical-align: inherit;">他们分开存在是一个神话。</font><font style="vertical-align: inherit;">对于科学，音乐，体育等，欧洲使用相同的词汇。</font><font style="vertical-align: inherit;">语言仅在语法，发音和最常用的单词上有所不同。</font></font></p>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">欧洲语言是同一家族的成员。</font><font style="vertical-align: inherit;">他们分开存在是一个神话。</font><font style="vertical-align: inherit;">对于科学，音乐，体育等，欧洲使用相同的词汇。</font></font></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module" id="team" >
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
        <section class="module bg-dark-60" data-background="{{asset('home/assets')}}//images/section-6.jpg" style="background-image: url(#);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="video-box">
                            <div class="video-box-icon"><a class="video-pop-up" href="#"><span class="icon-video"></span></a></div>
                            <div class="video-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">介绍</font></font></div>
                            <div class="video-subtitle font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">观看有关我们新产品的视频</font></font></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="module" id="services">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">我们的优势</font></font></h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>
                <div class="row multi-columns-row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-lightbulb"></span></div>
                            <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">想法和概念</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对细节的关注以及干净，结构良好的代码可确保为所有访问者带来流畅的用户体验。</font></font></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-bike"></span></div>
                            <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">优化速度</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对细节的关注以及干净，结构良好的代码可确保为所有访问者带来流畅的用户体验。</font></font></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-tools"></span></div>
                            <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">设计与界面</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对细节的关注以及干净，结构良好的代码可确保为所有访问者带来流畅的用户体验。</font></font></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="features-item">
                            <div class="features-icon"><span class="icon-gears"></span></div>
                            <h3 class="features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">高度可定制</font></font></h3>
                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">对细节的关注以及干净，结构良好的代码可确保为所有访问者带来流畅的用户体验。</font></font></p>
                        </div>
                    </div>
                </div>
            </div>
            <h3 id="lianx"></h3>
        </section>

        <section class="module" id="contact" style="margin-top: -10%">

            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系我们</font></font></h2>
                        <div class="module-subtitle font-serif"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <form id="contactForm" role="form" method="get" action="{{route('index.msgDo')}}">
{{--                            <input type="hidden" value="{{ csrf_token() }}">--}}
                            <div class="form-group">
                                <label class="sr-only" for="name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">名称</font></font></label>
                                <input class="form-control" type="text" id="name" name="name" placeholder="您的名字*" required="required" data-validation-required-message="Please enter your name." value="{{old('name')}}">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电子邮件</font></font></label>
                                <input class="form-control" type="email" id="email" name="email" placeholder="您的邮箱*" required="required" data-validation-required-message="Please enter your email address." value="{{old('email')}}">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="email"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">手机号码</font></font></label>
                                <input class="form-control" type="text" id="email" name="Phone" placeholder="您的手机*" required="required" data-validation-required-message="Please enter your email address." value="{{old('Phone')}}">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="7" id="message" name="message" placeholder="您的信息*" required="required" data-validation-required-message="Please enter your message." value="{{old('message')}}"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">

                                <input class="form-control" type="text" name="cap" placeholder="验证码*" required="required" style="width: 50%;float: left">
                                <p class="help-block text-danger"></p>
                                <div style="width: 50%;float: left" > <img src="{!! captcha_src() !!}" alt="" id="cap"/> </div>

                            </div>
                            <div class="text-center">
                                <button class="btn btn-block btn-round btn-d" id="" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">提交</font></font></button>
                            </div>
                        </form>
                        <label class="checkbox">
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li> {{$error}}</li>
                                        @endforeach

                                    </ul>
                                </div>
                            @endif

                        </label>

                    </div>
                    <div class="col-sm-4">
                        <div class="alt-features-item mt-0">
                            <div class="alt-features-icon"><span class="icon-map"></span></div>
                            <h3 class="alt-features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">公司地址</font></font></h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Joy苏州</font><font style="vertical-align: inherit;">乐朋建筑科技有限公司</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">苏州工业园区华池街88号</font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">晋合广场1座2301A室
                                </font></font></div>
                        <div class="alt-features-item mt-xs-60">
                            <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                            <h3 class="alt-features-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">联系方式</font></font></h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">电子邮件：mark@ljoy.cn </font></font><br><font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">手机：+86 189 944 658 96
                                </font>
                                <br>
                                <font style="vertical-align: inherit;">座机：+86 512 6766 2598
                                </font>

                            </font></div>
                    </div>
                </div>
            </div>
        </section>


    @endsection
@section('js')
    <script !src="">


        $('#cap').click(()=>{
            let cap =$('#cap');
            let src = cap.attr('src')+'&vt='+new Date().getTime();
            cap.attr('src',src);
        });
    </script>
@endsection
