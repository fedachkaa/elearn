@extends('layouts.main')

@section('content')
    <div style="text-align: center">
        @if(session()->has(1))
            @for($i = 1; $i<$count+1; $i++)
                @if(session()->get($i)[0] == null)
                    <p style="color: darkgray">Питання №{{$i}}: Пропущено. </p>
                @elseif(session()->get($i)[0] == session()->get($i)[1])
                    <p style="color: green">Питання №{{$i}}: Правильно. </p>
                @else
                    <p style="color: red">Питання №{{$i}}: Неправильно. </p>
                @endif
            @endfor
            <p> Результат: {{$correct_answers}}/ {{$count}}</p>
            <form action="{{ route('result')  }}" method="get">
                @method('POST')
                <input type="submit" name="loadResult" value="Завантажити результати">
            </form>
                <a href="{{route('result-clear')}}">Очистити результати</a>

        @else
            <p>Ще немає відповідей...</p>
        @endif

    </div>
@endsection
