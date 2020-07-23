<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="{{route('index.delAllFilesDo')}}" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="password" name="delPw" >
    <input type="submit" value="确定">


</form>
</body>
</html>
