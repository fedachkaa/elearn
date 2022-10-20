@extends('layouts.main')

@section('content')
    <div class="box highlight">
        <form action="{{route('test', ['slug'=>$question->id+1])}}" method="post">
            @csrf
            <label>{{$question->question}}</label>
            <br>
            <input type="radio" id="option_1" name="question" value="{{$question->option_1}}">
            <label for="option_1">{{$question->option_1}}</label>
            <br>
            <input type="radio" id="option_2" name="question" value="{{$question->option_2}}">
            <label for="option_2">{{$question->option_2}}</label>
            <br>
            <input type="radio" id="option_3" name="question" value="{{$question->option_3}}">
            <label for="option_3">{{$question->option_3}}</label>
            <br>
            <input type="radio" id="option_4" name="question" value="{{$question->option_4}}">
            <label for="option_4">{{$question->option_4}}</label>
            <input type="text" name="answer" value="{{$question->answer}}" hidden>
            <input type="text" name="question_id" value="{{$question->id}}" hidden>
            <br>
            <br>
            @if($question->id!=$count)
                <input type="submit" value="Наступне питання">
            @else
                <input type="submit" value="Завершити тестування">
            @endif
        </form>

        @if($question->id!=1)
        <form action="{{ route('test', ['slug'=>$question->id-1])}}" method="post" class="wrapper">
            @csrf
            <input type="submit" value="Попереднє питання">
        </form>
        @endif
    </div>
@endsection
