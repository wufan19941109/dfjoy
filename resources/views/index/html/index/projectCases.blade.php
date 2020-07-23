@extends('index.main')
@section('content')
    <div class="main">
    <section class="module bg-dark-60 portfolio-page-header" data-background="{{asset('home/assets')}}//images/banner/项目案例.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3">
                    <h2 class="module-title font-alt">项目案例</h2>
                    <div class="module-subtitle font-serif"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="module pb-0"style="margin-top: -5%">

        <ul class="works-grid works-hover-w works-grid-4" id="works-grid">


            @foreach($cases as $k =>$v)
            <li class="work-item illustration photography"><a href="{{url('case')}}/{{$v['id']}}">
                    <div class="work-image"><img src="
              @if(strstr($v['caseImgs'], ','))
                        {{substr($v['caseImgs'],0,strpos($v['caseImgs'], ','))}}
                        @else
                        {{$v['caseImgs']}}
                       @endif
                " alt="Portfolio Item" style="height: 287px"/></div>
                    <div class="work-caption font-alt">
                        <h3 class="work-title">{{$v['clientName']}}</h3>
                        <div class="work-descr">{{$v['caseDate']}}</div>
                    </div></a></li>
            @endforeach
        </ul>
        <div class="row" align="center">
            <div class="col-sm-12">
                <div class="pagination font-alt"><a href="#"><i class="fa fa-angle-left"></i></a><a class="active" href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 </font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2 </font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3 </font></font></a><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></a><a href="#"><i class="fa fa-angle-right"></i></a></div>
            </div>
        </div>
    </section>
    </div>
    <hr class="divider-d">

    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a>
    </div>

@endsection
