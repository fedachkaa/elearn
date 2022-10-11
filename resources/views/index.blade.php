<!DOCTYPE HTML>
<html>
<head>
    <title>E-learn</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('elearn/public/css/index.css') }}">
    <link rel="stylesheet" href="{{asset('elearn/public/font-awesome/css/font-awesome.min.css')}}">
</head>
<body>
<div id="page-wrapper">
    <div id="header">
        <h1><a href="{{route('home')}}" id="logo">E-learn <em>by Fedak Aleksandra</em></a></h1>
        <nav id="nav">
            <ul>
                <li class="current"><a href="{{route('home')}}">Головна</a></li>
                @if(isset(Auth::user()->name))
                    <li><a href="#">Тестування</a></li>
                    <li><a href="{{route('logout')}}">Вийти</a></li>
                @else
                    <li><a href="{{route('login.create')}}">Увійти</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>

<section class="wrapper">
    <div class="container">
        <div class="row">
            <section class="col-3">
                <div class="box highlight">
                    <i class="icon major fa-pencil-square-o"></i>
                    <h3>Тестування</h3>
                    <p> Проходь більше 100 тестів на різноманітні теми!</p>
                </div>
            </section>
            <section class="col-3">
                <div class="box highlight">
                    <i class="icon major fa fa fa-line-chart"></i>
                    <h3>Статистика</h3>
                    <p> Слідкуй за прогресом та вдосконалюй свої знання! </p>
                </div>
            </section>
            <section class="col-3">
                <div class="box highlight">
                    <i class="icon major fa fa-pie-chart"></i>
                    <h3>Популярні відповіді</h3>
                    <p> Переглядай тести, де роблять найбільше/найменше помилок! </p>
                </div>
            </section>
        </div>
    </div>
</section>
</body>
</html>
