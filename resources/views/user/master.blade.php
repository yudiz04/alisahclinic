<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    @include('user.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    @include('user.navbar')
    @yield('content') 
    @include('user.footer') 
</body>
</html>  