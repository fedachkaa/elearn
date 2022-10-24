@extends('admin.index')

@section('content')
    <form action="{{ route('tests.create') }}" method="get">
        <input type="submit" value="Додати питання">
    </form>
    <table style="border: #1a1a1a; text-align: center; width: auto; height: auto">
        <thead>
        <tr>
            <th style="width: 30px">#</th>
            <th>Питання</th>
            <th>1 варіант відповіді</th>
            <th>2 варіант відповіді</th>
            <th>3 варіант відповіді</th>
            <th>4 варіант відповіді</th>
            <th>Правильна відповідь</th>
        </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr style="padding: 5px">
                <td>{{ $question->id }}</td>
                <td>{{ $question->question }}</td>
                <td>{{ $question->option_1 }}</td>
                <td>{{ $question->option_2 }}</td>
                <td>{{ $question->option_3 }}</td>
                <td>{{ $question->option_4 }}</td>
                <td>{{ $question->answer }}</td>
                <td>
                    <a href="{{ route('tests.edit', ['test'=>$question->id]) }}">
                        <i class="fa fa-pencil"></i>
                    </a>

                    <form action=" {{ route('tests.destroy', ['test'=>$question->id]) }}" method="post" class="float-left">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Підтвердіть видалення')">
                            <i
                                class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

