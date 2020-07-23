@extends('index.main')
@section('content')

        <section class="module bg-dark-60 faq-page-header" data-background="{{asset('home/assets')}}/images/banner/常见问题.jpg" style="background-image: url(#);">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <h2 class="module-title font-alt"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">常问问题</font></font></h2>
{{--                        <div class="module-subtitle font-serif"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">美妙的宁静占据了我整个灵魂，就像我全心享受的春天宜人的早晨一样。</font></font></div>--}}
                    </div>
                </div>
            </div>
        </section>
        <section class="module" style="margin-top: -2%">
            <div class="container">
                <div class="row mb-60">
                    <div class="col-sm-8 col-sm-offset-2">

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
        </section>

@endsection
@section('js')

@endsection
