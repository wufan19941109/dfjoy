@extends('index.main')
@section('content')


<div id="serDetail"></div>


@endsection
@section('js')
    <script !src="">

        var a =`{{$dataSer}}`;

        $('#serDetail').html(HTMLDecode(a));

        function HTMLDecode(text) {
            var temp = document.createElement("div");
            temp.innerHTML = text;
            var output = temp.innerText || temp.textContent;
            temp = null;
            return output;
        }
    </script>
@endsection
