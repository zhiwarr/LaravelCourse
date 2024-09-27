<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>

<body>

    <a href="{{ route('about') }}">about</a>
    <a href="{{ route('user.profile',['id'=>1,'slug'=>'zhiwar-osman']) }}">zhiwar</a>
    @yield('content')
    @include('layouts.footer')

    @stack('scripts')
</body>

</html>
