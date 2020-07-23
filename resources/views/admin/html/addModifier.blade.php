@extends('admin.public')
@section('content')

    <div class="col-sm-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h2>添加修饰词</h2>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal m-t" id="signupForm" method="post" action="{{route('admin.addModifierDo')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">



                    <div class="form-group">
                        <label class="col-sm-2 control-label">修饰词类别：</label>
                        <div class="col-sm-6">
                            <input id="ModifierType" name="ModifierType" class="form-control" type="text" aria-required="true" aria-invalid="false">
                        </div>
                    </div>


                    <div class="form-group">
                        <label   class="col-sm-2 control-label">修饰词：</label>
                        <div class="col-sm-9">
                            <textarea id="Modifier" name="Modifier"  rows="10"   placeholder="一行一个修饰词" class="form-control" ></textarea>


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
                if($('#Modifier').val() == '' || $("#ModifierType").val()=='' ) {
                    alert('请填写信息')
                    event.preventDefault();
                }
            });
        })



    </script>
@endsection
