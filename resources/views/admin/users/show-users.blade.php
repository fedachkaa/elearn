@extends('layouts.index')

@section('content')
    <div style="margin-top: 2%">
        <table>
            <thead>
            <tr>
                <th style="width: 30px">#</th>
                <th>Ім'я</th>
                <th>Електронна пошта</th>
                <th>Кількість правильних відповідей</th>
                <th>Кількість питань</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr style="padding: 5px">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->result }}</td>
                    <td>{{ $count_questions }}</td>
                    <td>
                        <form action="{{route('users.destroy',['user'=>$user->id])}}" method="post" style="margin: 3px">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Видалити користувача {{ $user->name }}?')">
                                <i
                                    class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

