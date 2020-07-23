@extends('admin.public')
@section('content')

    <div class="col-sm-8">

        <div class="ibox float-e-margins">

            <div class="ibox-title">
                <h2>添加FAQ</h2>
            </div>
            <div class="ibox-content">

                <form class="form-horizontal m-t" id="signupForm" method="post" action="{{route('admin.KFUpdateDo')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <div class="form-group">
                        <label class="col-sm-2 control-label"><span style="color: red">*</span>类型：</label>

                        <div class="col-sm-3">
                            <select class="form-control m-b" name="type" id="cate">


                                @foreach($kfCateList as $key=>$cate)
                                    <option value="{{$cate['id']}}">{{$cate['type']}}</option>

                                @endforeach
                            </select>


                        </div>
                        <BR/><HR/>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">客服号码：</label>
                        <div class="col-sm-6">
                            <input  name="number" class="form-control" type="text" aria-required="true" aria-invalid="false" id="number" >
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
        <div class="form-group">
            <h1>
                <label class="col-sm-3 ">当前客服：</label>
                <label class="col-sm-4 control-label">{{$kfCate[0]['type']}}:{{$kfData[0]['number']}}</label>
            </h1>

        </div>
    </div>

@endsection
@section('js')
    <script>


        $(document).ready(function () {
            $('#sub').click(function(event){
                if($('#number').val() == '' ||$('#cate').val() == '') {
                    alert('请填写信息')
                    event.preventDefault();
                }
            });
        })



    </script>
@endsection
