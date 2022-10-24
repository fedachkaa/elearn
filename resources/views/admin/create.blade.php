@extends('admin.index')

@section('content')
    <div class="create-test-form">
        <form action="{{ route('tests.store') }}" method="post" >
            @csrf
            <div>
                <label>
                    Питання:
                    <textarea rows="2" name="question" placeholder="Введіть питання..."></textarea>
                </label>
            </div>

            <div>
                <label>
                    1 варіант відповіді:
                    <textarea rows="2" name="option_1" placeholder="Введіть 1-ий варіант відповіді..."></textarea>
                </label>
            </div>
            <div>
                <label>
                    2 варіант відповіді:
                    <textarea rows="2" name="option_2" placeholder="Введіть 2-ий варіант відповіді..."></textarea>
                </label>
            </div>
            <div>
                <label>
                    3 варіант відповіді:
                    <textarea rows="2" name="option_3" placeholder="Введіть 3-ий варіант відповіді..."></textarea>
                </label>
            </div>
            <div>
                <label>
                    4 варіант відповіді:
                    <textarea rows="2" name="option_4" placeholder="Введіть 4-ий варіант відповіді..."></textarea>
                </label>
            </div>
            <div>
                <label>
                    Правильна відповідь:
                    <textarea rows="2" name="answer" placeholder="Введіть правильну відповідь..."></textarea>
                </label>
            </div>
            <br>
            <button type="submit">Додати питання</button>
        </form>
    </div>
@endsection
