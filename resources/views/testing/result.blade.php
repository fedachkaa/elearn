@extends('layouts.main')

@section('content')
    @if(session()->has(1))
        @for($i = 0; $i<$count; $i++)
                <p>Питання №{{$i + 1}} : {{session()->get($i)[0]}}. Правильна відповідь: {{session()->get($i)[1]}}</p>
        @endfor
        <a href="{{route('result-clear')}}">Очистити результати</a>
    @else
        <p>Ще немає відповідей...</p>
    @endif
@endsection
