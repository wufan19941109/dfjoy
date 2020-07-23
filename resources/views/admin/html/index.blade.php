@extends('admin.public')
@section('content')
<div class="row">
                  <div class="col-lg-9 main-chart">
                       <div align="center"> <h1>欢迎使用Joy后台 </h1></div>
                      <div align="center"> <h1> 你好，{{$userInfo[0]->emplName}} </h1></div>
                  </div><!-- /col-lg-3 -->
</div><! --/row -->
@endsection
