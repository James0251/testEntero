@extends('layout.app')

@section('content')
    <table class="features-table">
        <thead>
        <tr>
            <td>No</td>
            <td class="grey">Название</td>
            <td class="grey" nowrap>Автор</td>
            <td class="green">Год</td>
        </tr>
        </thead>

        <tbody>
        @foreach($books as $book)
            <tr>
                <td nowrap>{{ $book->id }}</td>
                <td class="grey"><strong><i>{{ $book->title }}</i></strong></td>
                <td class="grey"><strong>{{ $book->author }}</strong></td>
                <td class="green">{{ $book->year }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



