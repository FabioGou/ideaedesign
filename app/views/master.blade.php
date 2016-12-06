<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$titulo or ''}}</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/home.css')}}">
</head>
<body>
<div class="container-fluid">
    @yield('conteudo')
</div>
</body>
</html>