@extends('admin.public')
@section('content')
    <div class="row">
        <div class="col-lg-12 main-chart">
            <a href="{{route('admin.addModifier')}}"><button type="button" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">添加修饰词</font></font></button></a>
            <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead>
                <div class="input-group">
                    <input type="text" id="kw" style="width: 20%;float: right" placeholder="按问题查找" class="input-sm form-control"> <span class="input-group-btn">
                                                    <span class="input-group-btn">
                                                        <button type="button" id="searchBtn" class="btn btn-sm btn-primary"> 查找</button>
                                                    </span>
                                        </span></div>
                <tr class="text-c" align="center">
                    <th>id</th>
                    <th>修饰词分类</th>
                    <th>修饰词</th>
                    <th>创建时间</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>

                </tbody>

            </table>
        </div><!-- /col-lg-3 -->
    </div><! --/row -->
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            var dataTables = $('.dataTables-example').dataTable({

                "lengthMenu": [ [10, 25, 50,100,], [10, 25, 50, 100] ],
                "processing":true,

                searching:false,
                columnDefs:[
                    {targets:[4],orderable:false}
                ],
                serverSide:true,

                ajax: {
                    url:'{{route('admin.ModifierList')}}',
                    type: 'POST',

                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    // 请求的参数
                    data:(d)=>{
                        d.kw = $.trim($('#kw').val());
                    },
                },

                "columns": [
                    {'data':'id'},
                    {'data':'type'},
                    {'data':'words'},
                    {'data':'createTime'},

                    {'data':' bb','defaultContent':``},
                ],



                createdRow:function(row,data){
                    //每行的操作

                    var htmlDo =`<div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle" aria-expanded="false">操作 <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">

                                    <li><a href="{{url('admin/ModifierUpdate/')}}/${data.id}" class="font-bold">修改</a>
                                    </li>
                                    <li class="divider"></li>

                                    <li><a href="javascript:if(confirm('确实要删除吗?'))location='{{url('admin/ModifierDel/')}}/${data.id}'">删除</a>

                                    </li>
                                </ul>
                            </div>`;

                    $(row).find('td:eq(4)').html(htmlDo);
                }

            });
            $('#searchBtn').click(()=>{
                dataTables.api().ajax.reload();
            });


        });



    </script>
@endsection
