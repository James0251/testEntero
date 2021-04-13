@extends('layout.app')

@section('content')
    <table class="features-table">
        <thead>
        <tr>
            <td>No</td>
            <td class="grey">Название</td>
            <td class="grey" nowrap>Автор</td>
            <td class="grey">Год</td>
            <td class="green" colspan="2">Действия</td>
        </tr>
        </thead>

        <tbody>
        @foreach($books as $book)
            <tr>
                <td nowrap>{{ $book->id }}</td>
                <td class="grey"><strong><i>{{ $book->title }}</i></strong></td>
                <td class="grey"><strong>{{ $book->author }}</strong></td>
                <td class="grey">{{ $book->year }}</td>
                <td class="green">
                    <a href="{{ action('BookController@create') }}" class="btn btn-primary">Создать</a>
                </td>
                <td class="green">
                    <a href="{{ route('edit', ['book' => $book->id]) }}" class="btn btn-success">Редактировать</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



