@extends('layout.app')

@section('content')

    <div class="text-right mt-4">
        <a href="{{ route('create') }}" class="btn btn-primary">Создать новую книгу</a>
    </div>

    <table class="features-table">
        <thead>
        <tr>
            <td>No</td>
            <td class="grey">Название</td>
            <td class="grey" nowrap>Автор</td>
            <td class="grey">Год</td>
            <td class="green">Действия</td>
        </tr>
        </thead>

        <tbody>
        @foreach($books as $book)
            <tr>
                <td nowrap>{{ $book->id }}</td>
                <td class="grey"><strong><i><a href="{{ route('edit', ['book' => $book->id]) }}">{{ $book->title }}</a></i></strong></td>
                <td class="grey"><strong>{{ $book->author }}</strong></td>
                <td class="grey">{{ $book->year }}</td>

                <td class="green">
                    <form action="{{ route('delete', ['book' => $book->id]) }}"
                          method="post" onsubmit="return confirm('Удалить эту книгу?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="m-0 p-0 border-0 bg-transparent">
                            <i class="far fa-trash-alt text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection



