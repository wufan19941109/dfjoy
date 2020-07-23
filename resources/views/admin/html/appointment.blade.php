@extends('admin.public')
@section('content')
    <div class="row">
        <div class="col-lg-12 main-chart">

            <table class="table table-striped table-bordered table-hover dataTables-example">
                <thead>
                <div class="input-group">
                    <input type="text" id="kw" style="width: 20%;float: right" placeholder="按姓名查找" class="input-sm form-control"> <span class="input-group-btn">
                                                    <span class="input-group-btn">
                                                        <button type="button" id="searchBtn" class="btn btn-sm btn-primary"> 查找</button>
                                                    </span>
                                        </span></div>
                <tr class="text-c" align="center">
                    <th>id</th>
                    <th>姓名</th>
                    <th>手机号</th>
                    <th>地址</th>
                    <th>维修位置</th>
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
                    {targets:[6],orderable:false}
                ],
                serverSide:true,

                ajax: {
                    url:'{{route('admin.appointmentList')}}',
                    type: 'POST',

                    headers: { 'X-CSRF-TOKEN' : '{{ csrf_token() }}' },
                    // 请求的参数
                    data:(d)=>{
                        d.kw = $.trim($('#kw').val());
                    },
                },

                "columns": [
                    {'data':'id'},
                    {'data':'name'},
                    {'data':'phone'},
                    {'data':'location'},
                    {'data':'leak'},
                    {'data':'createDate'},

                    {'data':' bb','defaultContent':``},
                ],



                createdRow:function(row,data){
                    //每行的操作

                    var htmlDo =`<div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle" aria-expanded="false">操作 <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">



                                    <li><a href="javascript:if(confirm('确实要删除吗?'))location='{{url('admin/appointmentDel/')}}/${data.id}'">删除</a>

                                    </li>
                                </ul>
                            </div>`;

                    $(row).find('td:eq(6)').html(htmlDo);
                }

            });
            $('#searchBtn').click(()=>{
                dataTables.api().ajax.reload();
            });


        });



    </script>
@endsection
