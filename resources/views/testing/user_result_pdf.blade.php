<!DOCTYPE html>
<html>
<head>
    <title>Результати</title>
</head>
<body>
<div style="font-family: DejaVu Sans,sans-serif">
    <h1 style="text-align: center">Результати {{ $name }}</h1>
    <div>
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
        @endif
        <h3 style="text-align: center"> Результат: {{$correct_answers}}/ {{$count}}</h3>
    </div>
</div>
</body>
</html>
