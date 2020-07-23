@extends('index.main')
@section('content')
    <section class="module bg-dark-60 blog-page-header" data-background="{{asset('home/assets/')}}/images/banner/房屋维修防水.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">维修流程</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="module">
        <div class="container">
            <div class="row multi-columns-row post-columns">
                <div class="col-sm-6 col-md-3 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><img src="{{asset('home/assets/')}}/images/flow/1.jpg" alt="Blog-post Thumbnail"></div>
                        <div class="post-header font-alt" style="width: 100%;height: 100px;" align="center">
                            <h4 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>第一步</b></font></font></h4>
                            <hr class="divider-w mt-10 mb-20">
                            <h5 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">上门勘察分析渗漏原因</font></font></h5>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><img src="{{asset('home/assets/')}}/images/flow/2.jpg" alt="Blog-post Thumbnail"></div>
                        <div class="post-header font-alt" style="width: 100%;height: 100px;" align="center">
                            <h4 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>第二步</b></font></font></h4>
                            <hr class="divider-w mt-10 mb-20">
                            <h5 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">根据渗漏原因和房屋类型确定维修方案</font></font></h5>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><img src="{{asset('home/assets/')}}/images/flow/3.jpg" alt="Blog-post Thumbnail"></div>
                        <div class="post-header font-alt" style="width: 100%;height: 100px;" align="center">
                            <h4 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>第三步</b></font></font></h4>
                            <hr class="divider-w mt-10 mb-20">
                            <h5 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">方案确定 签订服务合同</font></font></h5>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><img src="{{asset('home/assets/')}}/images/flow/4.jpg" alt="Blog-post Thumbnail"></div>
                        <div class="post-header font-alt" style="width: 100%;height: 100px;" align="center">
                            <h4 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>第四步</b></font></font></h4>
                            <hr class="divider-w mt-10 mb-20">
                            <h5 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">持证施工队伍进场施工</font></font></h5>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><img src="{{asset('home/assets/')}}/images/flow/5.jpg" alt="Blog-post Thumbnail"></div>
                        <div class="post-header font-alt" style="width: 100%;height: 100px;" align="center">
                            <h4 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>第五步</b></font></font></h4>
                            <hr class="divider-w mt-10 mb-20">
                            <h5 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">监理进行施工关键节点最终结果验收</font></font></h5>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-4">
                    <div class="post">
                        <div class="post-thumbnail"><img src="{{asset('home/assets/')}}/images/flow/6.jpg" alt="Blog-post Thumbnail"></div>
                        <div class="post-header font-alt" style="width: 100%;height: 100px;" align="center">
                            <h4 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>第六步</b></font></font></h4>
                            <hr class="divider-w mt-10 mb-20">
                            <h5 class="font-alt mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">最终验收合格后发放质保</font></font></h5>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>
    @endsection
