@extends('admin.public')
@section('content')

    <div class="col-sm-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h2>添加FAQ</h2>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal m-t" id="signupForm" method="post" action="{{route('admin.FAQAddDo')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-sm-2 control-label"><span style="color: red">*</span>FAQ分类：</label>

                        <div class="col-sm-3">
                            <select class="form-control m-b" name="cate" id="cate">


                                @foreach($cateList as $key=>$cate)
                                    <option value="{{$cate['id']}}">{{$cate['cateName']}}</option>

                                @endforeach
                            </select>


                        </div>
                        <BR>
                        <HR>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">问题：</label>
                        <div class="col-sm-6">
                            <input id="question" name="question" class="form-control" type="text" aria-required="true" aria-invalid="false">
                        </div>
                    </div>


                    <div class="form-group">
                        <label   class="col-sm-2 control-label">解答：</label>
                        <div class="col-sm-9">
                            <input id="answer" name="answer" class="form-control" type="text">

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-3 col-sm-offset-3">
                            <input type="hidden" id="hidNum" value="">
                            <button class="btn btn-primary" id="sub" type="submit">提交</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>


        $(document).ready(function () {
            $('#sub').click(function(event){
                if($('#answer').val() == '' || $("#question").val()=='' || $('#cate').val() =='' ) {
                    alert('请填写信息')
                    event.preventDefault();
                }
            });
        })



    </script>
@endsection
