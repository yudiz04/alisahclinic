<!DOCTYPE html>
<html lang="en">
<head> 
    <title>@yield('title')</title>
    @include('admin.header')
</head>
<body class="">
    <div class="wrapper">
        <div class="main-panel">
            @include('admin.navbar')
            @yield('content') 
            @include('admin.footer')
        </div>
            @include('admin.sidebar')
    </div>
</body>
</html> 