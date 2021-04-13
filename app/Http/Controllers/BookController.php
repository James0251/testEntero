<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{

    public function index()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }


    public function create()
    {
        return view('book.create');
    }


    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->year = $request->input('year');
        $book->save();
        return redirect()->action('BookController@index')->with('success', 'Новый книга успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }


    public function edit(Book $book) {
        return view('book.edit', compact('book'));
    }


    public function update(Request $request, Book $book)
    {
        $book->update($request->all());
        return redirect()->action('BookController@index')->with('success', 'Книга успешно отредактирована');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        //
    }
}
