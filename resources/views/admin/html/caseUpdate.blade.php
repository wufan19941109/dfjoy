@extends('admin.public')
@section('content')

    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h1><b>修改案例</b></h1>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal m-t" id="signupForm" method="post" action="{{route('admin.caseUpdateDo')}}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> <span style="color: red">*</span>客户名字：</label>
                        <div class="col-sm-6">
                            <input type="text" id="clientName"  name="clientName" value="{{$caseData[0]['clientName']}}" class="form-control">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"> <span style="color: red">*</span>案例介绍：</label>
                        <div class="col-sm-6">
                            <input type="text" id="caseContent"  name="caseContent" value="{{$caseData[0]['caseContent']}}" class="form-control">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label"> <span style="color: red">*</span>开始日期：</label>
                        <div class="col-sm-6">
                            <input type="date" id="caseDate"  name="caseDate" value="{{$caseData[0]['caseDate']}}" class="form-control">

                        </div>
                    </div>

                    <div class="form-group add_div">
                        <label class="col-sm-3 control-label"><span style="color: red">*</span> 案例图片：</label>
                        <p>

                            <input id="photo"  type="file" name="photo" multiple="multiple"/><br />
                        <ul id="ulList">
                            @forelse($caseImgs as $k =>$v)
                                <img src="\{{$v}}" width='150px'/>&nbsp;
                            @empty
                            @endforelse
                        </ul>
                        <p>

                    </div>

                    <input type="hidden" name="caseImgs" id="indexImgUrl" value="{{$caseData[0]['caseImgs']}}">
                    <input type="hidden" name="id"  value="{{$caseData[0]['id']}}">

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
                if($('#clientName').val() == '' || $("#caseContent").val()==''  ) {
                    alert('请填写信息')
                    event.preventDefault();
                }
            });
        })



        $('#photo').on('change',function () {
            var FU = $('#photo');
            $("#ulList").empty();
            $('#indexImgUrl').empty();
            if(FU[0].files.length > 6){
                $('#photo').val('');
                alert('不能超过6张，请重新上传');
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
