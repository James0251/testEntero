@extends('layout.app')

@section('content')
    <form action="{{ action('BookController@store') }}" class="ui-form" method="post">

        @csrf

        <h3>Создание новой книги</h3>
        <br/><br/>
        <div class="form-row">
            <input type="text" name="title" id="title" required autocomplete="off">
            <label for="title">Название книги: </label>
        </div>
        <br/>
        <div class="form-row">
            <input type="text" name="author" id="author" required autocomplete="off">
            <label for="author">Автор книги: </label>
        </div>
        <br/>
        <div class="form-row">
            <input type="text" name="year" id="year" required autocomplete="off">
            <label for="year">Год выпуска: </label>
        </div>

        <p><input type="submit" value="Создать"></p>
    </form>
@endsection
