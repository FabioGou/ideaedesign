<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="{{asset('assets/css/layout.css')}}" />
        <title>Login</title>
    </head>
    <body>
    @include("header")
    <div class="content">
        <div class="container">
            @yield("content")
        </div>
    </div>
    @include("footer")
    </body>
</html>