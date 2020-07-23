@extends('admin.public')
@section('content')

    <div class="col-sm-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h2>修改员工</h2>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal m-t" id="signupForm" method="post" action="{{route('admin.userUpdateDo')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="id" value="{{$userInfo[0]->id}}">
                    <div class="form-group">
                        <label class="col-sm-1 control-label">用户名：</label>
                        <div class="col-sm-8">
                            <input type="text" id="username"  disabled class="form-control" value="{{$userInfo[0]->emplName}}">
                            <span id="checkUsername" style="color: red; display: none" class="help-block m-b-none"><i class="fa fa-info-circle"></i>该用户名已存在</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">昵称：</label>
                        <div class="col-sm-8">
                            <input id="nickname" name="nickname" class="form-control" type="text" aria-required="true" aria-invalid="false" value="{{$userInfo[0]->nickname}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label   class="col-sm-1 control-label">手机号：</label>
                        <div class="col-sm-8">
                            <input id="mobile" name="phoneNum" class="form-control" type="text" value="{{$userInfo[0]->phoneNum}}">
                            <span id="checkMobile" style="color: red; display: none" class="help-block m-b-none"><i class="fa fa-info-circle"></i>手机号码格式不正确</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">E-mail：</label>
                        <div class="col-sm-8">
                            <input  type="text" id="email" name="email" class="form-control" value="{{$userInfo[0]->email}}">
                            <span id="checkEmail" style="color: red; display: none" class="help-block m-b-none"><i class="fa fa-info-circle"></i>邮箱格式不正确</span>

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

            $('#username').blur(function(){
                let emplName = $("#username").val();
                $.ajax({
                    //请求方式
                    type : "POST",
                    //请求的媒体类型
                    //contentType: "application/json;charset=UTF-8",
                    //请求地址
                    url : "{{route('admin.ajaxCheckUsername')}}",

                    dataType: "json",
                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    //数据，json字符串
                    data :{emplName: emplName},
                    //请求成功
                    success : function(result) {
                        if(result ==1){
                            $('#checkUsername').hide();
                            $('#hidNum').val(0);
                        }else{
                            $('#checkUsername').show();
                            $('#hidNum').val(1);
                        }
                    },
                    //请求失败，包含具体的错误信息
                    error : function(e){
                        console.log(e.status);
                        console.log(e.responseText);
                    }
                })

            });

            $('#confirm_password').blur(function(){
                let confirm_password = $('#confirm_password').val();
                let password = $('#password').val();
                if(password !=confirm_password){
                    $('#checkPassword').show();
                    $('#hidNum').val(1);
                }else{
                    $('#checkPassword').hide();
                    $('#hidNum').val(0);
                }
            });

            $('#mobile').blur(function(){
                if( (/^1[3456789]\d{9}$/.test($('#mobile').val()))){
                    $('#checkMobile').hide();
                    $('#hidNum').val(0);
                }else{
                    $('#checkMobile').show();
                    $('#hidNum').val(1);
                }
            });

            $('#email').click(function(){


                let pattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if( (pattern.test($('#email').val()))){
                    $('#checkEmail').hide();
                    $('#hidNum').val(0);
                }else{
                    $('#checkEmail').show();
                    $('#hidNum').val(1);
                }
            });


            $('#sub').click(function(event){
                if($('#hidNum').val() >0){
                    alert('请修改信息')
                    event.preventDefault();
                }else if($('#username').val() == '' || $("#password").val()=='' || $("#confirm_password").val() ==''|| $('#mobile').val() =='' || $('#email').val() =='' ) {
                    alert('请填写信息')
                    event.preventDefault();
                }
            });
        })
        //($("#username").val().equals('') || ($("#password").val()=='') ||($("#confirm_password").val() =='') || ($('#mobile').val() =='') || ($('#email').val() =='')
        //($("#username").val()==null) && ($("#password").val()==null) && ($("#confirm_password").val() ==null) && ($('#mobile').val() ==null) && ($('#email').val() ==null)
        //(/^1[3456789]\d{9}$/.test(phone))
        // /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/



    </script>
@endsection
