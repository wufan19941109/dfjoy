@extends('admin.public')

@section('content')

    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h1><b>添加NEWS</b></h1>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal m-t" id="signupForm" method="post" action="{{route('admin.newsAddDo')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> <span style="color: red">*</span>标题：</label>
                        <div class="col-sm-6">
                            <input type="text" id="clientName"  name="newsTitle" class="form-control">

                        </div>
                    </div>


                    <div class="form-group add_div">
                        <label class="col-sm-3 control-label"><span style="color: red">*</span> 新闻图片：</label>
                        <p>

                            <input id="photo"  type="file" name="photo" multiple="multiple"/><br />
                        <ul id="ulList">
                        </ul>
                        <p>

                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> <span style="color: red">*</span>新闻内容：</label>
                    </div>
                    <div class="col-sm-12" id="editorCN">
                    </div>


                    <input type="hidden" name="newsImgs" id="indexImgUrl">
                    <input type="hidden" name="newsContent" id="content">



                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-5">
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
                if($('#clientName').val() == '' || $("#caseContent").val()=='' || $('#photo').val() =='' ) {
                    alert('请填写信息')
                    event.preventDefault();
                }
            });
        })



        //wangE
        // editor.txt.html() 获取内容
        //富文本创建 中文
        var E = window.wangEditor
        var editorZN = new E('#editorCN')
        editorZN.customConfig.debug = true
        editorZN.customConfig.uploadImgHeaders  ={'X-CSRF-TOKEN':'{{ csrf_token() }}'},
        editorZN.customConfig.uploadImgServer ="{{route('admin.newsPicUp')}}";

        editorZN.customConfig.uploadImgHooks = {
            success: function (xhr, editor, result) {
                console.log("上传成功");
            },
            fail: function (xhr, editor, result) {
                console.log(xhr);
            },
            error: function (xhr, editor) {
                alert("上传出错");
            },
            timeout: function (xhr, editor) {
                alert("上传超时");
            },
            // 多图片上传
            customInsert: function (insertImg, result, editor) {

                for (let i = 0; i <result['url'].length; i++) {
                    let url = result['url'][i]
                    insertImg(url)

                }
            }

        };
        editorZN.create()
        $('#sub').click(function () {
            $('#content').val(editorZN.txt.html());
        });



        $('#photo').on('change',function () {
            var FU = $('#photo');
            $("#ulList").empty();
            $('#indexImgUrl').empty();
            if(FU[0].files.length > 30){
                $('#photo').val('');
                alert('不能超过30张，请重新上传');
            }else{
                var formData = new FormData();

                for(var i = 0 ; i<FU[0].files.length;i++){
                    formData.append("imgs[]", $("#photo").get(0).files[i]);
                }


                $.ajax({
                    url:"{{route('admin.casePicUp')}}", /*接口域名地址*/
                    type:'post',
                    data: formData,
                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    contentType: false,
                    processData: false,
                    success:function(res){
                        var resArray = JSON.parse(res)

                        if(resArray['errno']==0){

                            for(var i=0 ; i<resArray['url'].length;i++){
                                var html = "<img src="+"\\"+resArray['url'][i]+" width='150px'/>&nbsp;";
                                $("#ulList").append(html);
                            }
                            $('#indexImgUrl').val(resArray['url']);

                        }

                    }
                })

            }

        });





    </script>
@endsection
