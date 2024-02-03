<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AuthorController extends Controller
{
    public function all_author()
    {
        $authors = Author::latest()->paginate(5);

        return view('author.author_all', compact('authors'));
    }

    public function add_author()
    {
        return view('author.author_add');
    }

    public function store_author(Request $request)
    {
        $request->validate(
            [
                'author' => 'required|unique:authors,author'
            ],
            [
                'author.required' => 'Полето за автор е задължително!',
                'author.unique' => 'Този автор вече съществува!'
            ]
        );

        Author::insert([
            'author' => $request->author,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Успешно добавихте автор!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.author')->with($notification);
    }

    public function edit_author($id)
    {
        $author = Author::findOrFail($id);

        return view('author.author_edit', compact('author'));
    }

    public function update_author(Request $request)
    {
        $request->validate(
            [
                'author' => 'required|unique:authors,author'
            ],
            [
                'author.required' => 'Полето за автор е задължително!',
                'author.unique' => 'Този автор вече съществува!'
            ]
        );

        $author_id = $request->id;

        Author::findOrFail($author_id)->update([
            'author' => $request->author,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Успешно редактирахте автор!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.author')->with($notification);
    }

    public function delete_author($id)
    {
        $author_id = Author::findOrFail($id);

        $author_id->delete();

        $notification = array(
            'message' => 'Успешно изтрихте автор!',
            'alert-type' => 'success'
        );

        Session::flash('success', 'Успешно изтрихте автор!');

        return redirect()->route('all.author')->with($notification);
    }

    public function search_author(Request $request)
    {
        $search = $request->search;

        // Use paginate instead of get because of the links
        $authors = Author::where('author', 'like', '%' . $search . '%')->paginate(5);

        return view('author.author_all', compact('authors'));
    }
}
