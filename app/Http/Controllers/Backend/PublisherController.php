<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Publisher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function all_publisher()
    {

        $publishers = Publisher::latest()->paginate(5);

        return view('publisher.publisher_all', compact('publishers'));
    }

    public function add_publisher()
    {
        return view('publisher.publisher_add');
    }

    public function store_publisher(Request $request)
    {
        $request->validate(
            [
                'publisher' => 'required|unique:publishers,publisher'
            ],
            [
                'publisher.required' => 'Полето за издател е задължително!',
                'publisher.unique' => 'Този издател вече съществува!'
            ]
        );

        Publisher::insert([
            'publisher' => $request->publisher,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Успешно добавихте издател!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.publisher')->with($notification);
    }

    public function edit_publisher($id)
    {
        $publisher = Publisher::findOrFail($id);

        return view('publisher.publisher_edit', compact('publisher'));
    }

    public function update_publisher(Request $request)
    {
        $request->validate(
            [
                'publisher' => 'required|unique:publishers,publisher'
            ],
            [
                'publisher.required' => 'Полето за издател е задължително!',
                'publisher.unique' => 'Този издател вече съществува!'
            ]
        );

        Publisher::findOrFail($request->id)->update([
            'publisher' => $request->publisher,
            'updated_at' => Carbon::now()
        ]);

        $notification = array(
            'message' => 'Успешно редактирахте издател!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.publisher')->with($notification);
    }

    public function delete_publisher($id)
    {
        Publisher::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Успешно изтрихте издател!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.publisher')->with($notification);
    }
}
