<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;

class BookController extends Controller
{
    public function all_book()
    {

        $books = Book::latest()->paginate(5);

        return view('book.book_all', compact('books'));
    }

    public function add_book()
    {

        $authors = Author::latest()->get();
        $genres = Genre::latest()->get();
        $publishers = Publisher::latest()->get();

        return view('book.book_add', compact('authors', 'genres', 'publishers'));
    }

    public function store_book(Request $request)
    {

        $request->validate(
            [
                'book' => 'required|unique:books,book',
                'author_id' => 'required',
                'genre_id' => 'required',
                'publisher_id' => 'required',
                'date_publisher_year' => 'required',
                'isbn_number' => 'required|unique:books,isbn_number',
                'qty' => 'required',
                'pages' => 'required'
            ],
            [
                'book.required' => 'Полето за книга е задължително!',
                'book.unique' => 'Тази книга вече съществува!',
                'author_id.required' => 'Полето за автор е задължително!',
                'genre_id.required' => 'Полето за жанр е задължително!',
                'publisher_id.required' => 'Полето за издателство е задължително!',
                'date_publisher_year.required' => 'Полето за година на издаване е задължително!',
                'isbn_number.required' => 'Полето за ISBN номер е задължително!',
                'isbn_number.unique' => 'Този ISBN номер вече съществува!',
                'qty.required' => 'Полето за количество е задължително!',
                'pages.required' => 'Полето за страници е задължително!'
            ]
        );

        Book::insert([
            'book' => $request->book,
            'author_id' => $request->author_id,
            'genre_id' => $request->genre_id,
            'publisher_id' => $request->publisher_id,
            'date_publisher_year' => $request->date_publisher_year,
            'isbn_number' => $request->isbn_number,
            'qty' => $request->qty,
            'pages' => $request->pages,
            'resume' => $request->resume
        ]);

        $notification = array(
            'message' => 'Успешно добавихте книга!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.book')->with($notification);
    }

    public function edit_book($id)
    {
        $book = Book::findOrFail($id);
        $authors = Author::latest()->get();
        $genres = Genre::latest()->get();
        $publishers = Publisher::latest()->get();

        return view('book.book_edit', compact('book', 'authors', 'genres', 'publishers'));
    }

    public function update_book(Request $request)
    {
        $request->validate(
            [
                'book' => 'required|unique:books,book,' . $request->id,
                'author_id' => 'required',
                'genre_id' => 'required',
                'publisher_id' => 'required',
                'date_publisher_year' => 'required',
                'isbn_number' => 'required|unique:books,isbn_number,' . $request->id,
                'qty' => 'required',
                'pages' => 'required'
            ],
            [
                'book.required' => 'Полето за книга е задължително!',
                'book.unique' => 'Тази книга вече съществува!',
                'author_id.required' => 'Полето за автор е задължително!',
                'genre_id.required' => 'Полето за жанр е задължително!',
                'publisher_id.required' => 'Полето за издателство е задължително!',
                'date_publisher_year.required' => 'Полето за година на издаване е задължително!',
                'isbn_number.required' => 'Полето за ISBN номер е задължително!',
                'isbn_number.unique' => 'Този ISBN номер вече съществува!',
                'qty.required' => 'Полето за количество е задължително!',
                'pages.required' => 'Полето за страници е задължително!'
            ]
        );

        Book::findOrFail($request->id)->update([
            'book' => $request->book,
            'author_id' => $request->author_id,
            'genre_id' => $request->genre_id,
            'publisher_id' => $request->publisher_id,
            'date_publisher_year' => $request->date_publisher_year,
            'isbn_number' => $request->isbn_number,
            'qty' => $request->qty,
            'pages' => $request->pages,
            'resume' => $request->resume
        ]);

        $notification = array(
            'message' => 'Успешно редактирахте книга!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.book')->with($notification);
    }

    public function delete_book($id)
    {
        Book::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Успешно изтрихте книга!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.book')->with($notification);
    }
}
