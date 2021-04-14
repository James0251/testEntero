@extends('layout.app')

@section('content')
    <form action="{{ action('BookController@store') }}" class="ui-form" method="post" enctype="multipart/form-data">

        @csrf

        <h3>Создание новой книги</h3>

        <br/><br/>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible mt-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                    <span aria-hidden="true">&times;</span>
                </button>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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
        <br/>
        <div class="form-row">
            <input type="file" name="cover" id="cover">
            <label for="cover">Загрузить обложку: </label>
        </div>

        <p><input type="submit" value="Создать"></p>
    </form>
@endsection
