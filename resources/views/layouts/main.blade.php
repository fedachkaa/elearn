<!DOCTYPE HTML>
<html>
<head>
    <title>E-learn</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('elearn/public/css/index.css') }}">
    <link rel="stylesheet" href="{{asset('elearn/public/font-awesome/css/font-awesome.min.css')}}">
    <style>
    </style>
</head>
<body>
<div id="page-wrapper">
    <div id="header">
        <h1><a href="{{route('home')}}" id="logo">E-learn <em>by Fedak Aleksandra</em></a></h1>
        <nav id="nav">
            <ul>
                <li class="current"><a href="{{route('home')}}">Головна</a></li>
                @if(isset(Auth::user()->name))
                    <li><a href="{{route('test', ['slug'=>1])}}">Тестування</a></li>
                    <li><a href="{{route('result')}}">Результати</a> </li>
                    <li><a href="{{route('logout')}}">Вийти</a></li>
                @else
                    <li><a href="{{route('login.create')}}">Увійти</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
@yield('content')
</body>
</html>
