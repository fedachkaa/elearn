<!DOCTYPE HTML>
<html>
<head>
    <title>E-learn</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('elearn/public/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('elearn/public/css/user.css') }}">
    <link rel="stylesheet" href="{{asset('elearn/public/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
<div id="page-wrapper">
    <div id="header">
        <h1><a href="{{ route('admin') }}" id="logo">Адмін-панель <em>E-learn</em></a></h1>
        <nav id="nav">
            <ul>
                <li class="current"><a href="{{ route('home') }}">Головна сторінка E-learn</a></li>
                <li><a href="{{ route('tests.index') }}">Тести</a></li>
                <li><a href="#">Користувачі</a> </li>
                <li><a href="{{ route('logout') }}">Вийти</a></li>
            </ul>
        </nav>
    </div>
</div>
<div>
    @yield('content')
</div>
</body>
</html>
