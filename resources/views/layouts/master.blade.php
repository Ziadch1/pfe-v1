<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <title>Document</title>
</head>
<body>

    @include('layouts.navbar2')
        @yield('content')
    @include('layouts.footer2')
</body>
</html>