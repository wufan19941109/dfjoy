<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Joy后台</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('admin/assets')}}/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('admin/assets')}}/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets')}}/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets')}}/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets')}}/lineicons/style.css">

    <!-- Custom styles for this template -->
    <link href="{{asset('admin/assets')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('admin/assets')}}/css/style-responsive.css" rel="stylesheet">
    <script src="{{asset('admin/assets')}}/js/chart-master/Chart.js"></script>




    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('css')
</head>

<body>

<section id="container" >

    <header class="header black-bg">
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
        </div>
        <!--logo start-->
        <a href="index.html" class="logo"><b>joy 乐朋</b></a>
        <!--logo end-->

        <div class="top-menu">
            <ul class="nav pull-right top-menu">
                <li><a class="logout" href="{{route('admin.logout')}}">退出</a></li>
            </ul>
        </div>
    </header>
    <!--header end-->

    <!-- **********************************************************************************************************************************************************
    MAIN SIDEBAR MENU
    *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="profile.html"><img src="{{asset('admin/assets')}}/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                <h5 class="centered">{{$userInfo[0]->nickname}}</h5>
                <li class="mt">
                    <a class="active" href="{{route('admin.main')}}" target="im_a">
                        <i class="fa fa-dashboard"></i>
                        <span>首页</span>
                    </a>
                </li>
                <li class="mt">
                    <a class="active" href="{{route('admin.users')}}" target="im_a">
                        <i class="fa fa-dashboard"></i>
                        <span>员工管理</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="{{route('admin.news')}}" target="im_a">
                        <i class="fa fa-desktop"></i>
                        <span>新闻资讯管理</span>
                    </a>

                </li>

                <li class="sub-menu">
                    <a href="{{route('admin.cases')}}" target="im_a">
                        <i class="fa fa-desktop"></i>
                        <span>案例管理</span>
                    </a>


                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-desktop"></i>
                        <span>信息管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('admin.message')}} " target="im_a" >留言管理</a></li>
                        <li><a  href="{{route('admin.appointment')}}" target="im_a">预约管理</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-cogs"></i>
                        <span>常见问题管理</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('admin.FAQ')}} " target="im_a" >FAQ管理</a></li>
                        <li><a  href="{{route('admin.FAQCate')}}" target="im_a">FAQ分类管理</a></li>
                    </ul>

                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>网站设置</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('admin.KFUpdate')}}" target="im_a">客服设置</a></li>
                        <li><a  href="{{route('admin.email')}}" target="im_a">收件邮箱设置</a></li>


                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>国际站标题设置</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="{{route('admin.Modifier')}}" target="im_a">修饰词列表</a></li>




                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->


    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">

{{--            @yield('content')--}}
            <div class="row J_mainContent" id="content-main">
                <iframe id="J_iframe" width="100%" height="1000px" src="" frameborder="0"  name="im_a" >

                </iframe>

            </div>

        </section>
    </section>

    <!--main content end-->
    <!--footer start-->

</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('admin/assets')}}/js/jquery.js"></script>
<script src="{{asset('admin/assets')}}/js/jquery-1.8.3.min.js"></script>
<script src="{{asset('admin/assets')}}/js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="{{asset('admin/assets')}}/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{asset('admin/assets')}}/js/jquery.scrollTo.min.js"></script>
<script src="{{asset('admin/assets')}}/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="{{asset('admin/assets')}}/js/jquery.sparkline.js"></script>


<!--common script for all pages-->
<script src="{{asset('admin/assets')}}/js/common-scripts.js"></script>

<script type="text/javascript" src="{{asset('admin/assets')}}/js/gritter/js/jquery.gritter.js"></script>
<script type="text/javascript" src="{{asset('admin/assets')}}/js/gritter-conf.js"></script>

<!--script for this page-->
<script src="{{asset('admin/assets')}}/js/sparkline-chart.js"></script>
<script src="{{asset('admin/assets')}}/js/zabuto_calendar.js"></script>

<!-- Data Tables -->
<script src="{{asset('admin/assets/plugins/')}}/dataTables/jquery.dataTables.js"></script>
<script src="{{asset('admin/assets/plugins/')}}/dataTables/dataTables.bootstrap.js"></script>


@yield('js')


<script type="application/javascript">
    $(document).ready(function () {
        $("#date-popover").popover({html: true, trigger: "manual"});
        $("#date-popover").hide();
        $("#date-popover").click(function (e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function () {
                return myDateFunction(this.id, false);
            },
            action_nav: function () {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [
                {type: "text", label: "Special event", badge: "00"},
                {type: "block", label: "Regular event", }
            ]
        });
    });


    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
</script>


</body>
</html>
