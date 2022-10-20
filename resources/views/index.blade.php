@extends('layouts.main')

@section('content')

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
@endsection
