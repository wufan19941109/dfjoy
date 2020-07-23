@extends('tools.main')
@section('content')
    <div class="list-group">
        <div align="center">
        <a href="{{route('titles.index')}}" class="list-group-item active" >
            <h2 class="list-group-item-heading">
                标题组建
            </h2>
        </a>
        </div>


    </div>
    <div class="list-group">
        <div align="center">
        <a href="http://saiword.fobcentury.com/saiwordloc/exWord/dummy/index.html#/hot" class="list-group-item active" target="_blank">
            <h2 class="list-group-item-heading">
                关键词查询
            </h2>
        </a>
        </div>
    </div>
    <div class="list-group">
        <div align="center">
        <a href="{{route('ORC.index')}}" class="list-group-item active" target="_blank" >
            <h2 class="list-group-item-heading">
                图片文字识别
            </h2>
        </a>
        </div>
    </div>
    <div class="list-group">
        <div align="center">
            <a href="{{route('ORC.index')}}" class="list-group-item active" target="_blank" >
                <h2 class="list-group-item-heading">
                    整数转换为英文表述
                </h2>
            </a>
        </div>
    </div>
@endsection
