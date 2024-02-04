<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function all_genre()
    {
        $genres = Genre::latest()->paginate(5);

        return view('genre.genre_all', compact('genres'));
    }

    public function add_genre()
    {
        return view('genre.genre_add');
    }

    public function store_genre(Request $request)
    {
        $request->validate(
            [
                'genre' => 'required|unique:genres,genre'
            ],
            [
                'genre.required' => 'Полето за жанр е задължително!',
                'genre.unique' => 'Този жанр вече съществува!'
            ]
        );

        Genre::insert([
            'genre' => $request->genre
        ]);

        $notification = array(
            'message' => 'Успешно добавихте жанр!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.genre')->with($notification);
    }

    public function edit_genre($id)
    {
        $genre = Genre::findOrFail($id);

        return view('genre.genre_edit', compact('genre'));
    }

    public function update_genre(Request $request)
    {
        $request->validate(
            [
                'genre' => 'required|unique:genres,genre,' . $request->id
            ],
            [
                'genre.required' => 'Полето за жанр е задължително!',
                'genre.unique' => 'Този жанр вече съществува!'
            ]
        );

        Genre::findOrFail($request->id)->update([
            'genre' => $request->genre
        ]);

        $notification = array(
            'message' => 'Успешно редактирахте жанр!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.genre')->with($notification);
    }

    public function delete_genre($id)
    {
        Genre::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Успешно изтрихте жанр!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.genre')->with($notification);
    }

    public function search_genre(Request $request)
    {
        $search = $request->search;

        $genres = Genre::where('genre', 'like', '%' . $search . '%')->latest()->paginate(5);

        return view('genre.genre_all', compact('genres'));
    }
}
