<!doctype html>
<html>
<head>
    <title>{{$title or 'Hamroshop.com | Home'}}</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.css">
    <link rel="stylesheet" href="/css/all.css">
    @yield('header')
</head>
<body class="{{$body or "body-css"}}">
@include('layouts.partials.nav')
<div class="container main-content">
    @yield('content')
</div>
@include('layouts.partials.footer')

<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
@yield('footer')
</body>
</html>