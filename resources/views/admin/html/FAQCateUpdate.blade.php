@extends('admin.public')
@section('content')

    <div class="col-sm-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h2>添加FAQ</h2>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal m-t" id="signupForm" method="post" action="{{route('admin.FAQCateUpdateDo')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id"  value="{{$data[0]['id']}}">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">分类名称：</label>
                        <div class="col-sm-6">
                            <input id="cateName" name="cateName" class="form-control" type="text" aria-required="true" aria-invalid="false" value="{{$data[0]['cateName']}}">
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
                if($('#cateName').val() == '') {
                    alert('请填写信息')
                    event.preventDefault();
                }
            });
        })



    </script>
@endsection
