@extends('admin.index')

@section('content')
    <div class="create-test-form">
        <form action="{{ route('tests.update', ['test'=>$question->id]) }}" method="post" >
            @csrf
            @method('PUT')
            <div>
                <label>
                    Питання:
                    <textarea rows="2" name="question"> {{ $question->question }}</textarea>
                </label>
            </div>

            <div>
                <label>
                    1 варіант відповіді:
                    <textarea rows="2" name="option_1">{{ $question->option_1 }}</textarea>
                </label>
            </div>
            <div>
                <label>
                    2 варіант відповіді:
                    <textarea rows="2" name="option_2">{{ $question->option_2 }}</textarea>
                </label>
            </div>
            <div>
                <label>
                    3 варіант відповіді:
                    <textarea rows="2" name="option_3">{{ $question->option_3 }}</textarea>
                </label>
            </div>
            <div>
                <label>
                    4 варіант відповіді:
                    <textarea rows="2" name="option_4">{{ $question->option_4 }}</textarea>
                </label>
            </div>
            <div>
                <label>
                    Правильна відповідь:
                    <textarea rows="2" name="answer">{{ $question->answer }}</textarea>
                </label>
            </div>
            <br>
            <button type="submit">Зберегти зміни</button>
        </form>
    </div>
@endsection
