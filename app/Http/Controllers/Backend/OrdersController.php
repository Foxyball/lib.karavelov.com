<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Order;
use App\Models\User;

class OrdersController extends Controller
{
    public function all_order()
    {
        $orders = Order::latest()->paginate(5);

        return view('order.order_all', compact('orders'));
    }

    public function add_order()
    {
        $books = Book::latest()->get();
        $users = User::latest()->get();

        return view('order.order_add', compact('books', 'users'));
    }

    public function store_order(Request $request)
    {

        $request->validate(
            [
                'status' => 'required',
                'date_end' => 'required',
                'user_id' => 'required',
                'book_1_id' => 'required',
            ],
            [
                'status.required' => 'Полето за статус е задължително.',
                'date_end.required' => 'Полето за крайна дата е задължително.',
                'user_id.required' => 'Полето за потребител е задължително.',
                'book_1_id.required' => 'Полето за книга 1 е задължително.',
            ]
        );

        $status = $request->status;
        $date_end = $request->date_end;
        $user_id = $request->user_id;
        $book_1_id = $request->book_1_id;
        $book_2_id = $request->book_2_id;
        $book_3_id = $request->book_3_id;
        $book_4_id = $request->book_4_id;
        $book_5_id = $request->book_5_id;

        $date_end = date('Y-m-d H:i:s', strtotime($date_end));

        Order::insert([
            'status' => $status,
            'date_add' => now(),
            'date_end' => $date_end,
            'user_id' => $user_id,
            'book_1_id' => $book_1_id,
            'book_2_id' => $book_2_id,
            'book_3_id' => $book_3_id,
            'book_4_id' => $book_4_id,
            'book_5_id' => $book_5_id
        ]);

        $notification = array(
            'message' => 'Заявката е добавена успешно!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.order')->with($notification);
    }

    public function edit_order($id)
    {
        $order = Order::findOrFail($id);
        $books = Book::latest()->get();
        $users = User::latest()->get();

        return view('order.order_edit', compact('order', 'books', 'users'));
    }

    public function update_order(Request $request)
    {
        $request->validate(
            [
                'status' => 'required',
                'date_end' => 'required',
                'user_id' => 'required',
                'book_1_id' => 'required',
            ],
            [
                'status.required' => 'Полето за статус е задължително.',
                'date_end.required' => 'Полето за крайна дата е задължително.',
                'user_id.required' => 'Полето за потребител е задължително.',
                'book_1_id.required' => 'Полето за книга 1 е задължително.',
            ]
        );

        $status = $request->status;
        $date_end = $request->date_end;
        $user_id = $request->user_id;
        $book_1_id = $request->book_1_id;
        $book_2_id = $request->book_2_id;
        $book_3_id = $request->book_3_id;
        $book_4_id = $request->book_4_id;
        $book_5_id = $request->book_5_id;

        $date_end = date('Y-m-d H:i:s', strtotime($date_end));

        Order::findOrFail($request->id)->update([
            'status' => $status,
            'date_end' => $date_end,
            'user_id' => $user_id,
            'book_1_id' => $book_1_id,
            'book_2_id' => $book_2_id,
            'book_3_id' => $book_3_id,
            'book_4_id' => $book_4_id,
            'book_5_id' => $book_5_id
        ]);

        $notification = array(
            'message' => 'Заявката е обновена успешно!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.order')->with($notification);
    }



    public function delete_order($id)
    {
        Order::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Заявката е изтрита успешно!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.order')->with($notification);
    }

    public function search_order(Request $request)
    {
        $search = $request->search;

        // search by user name
        $orders = Order::whereHas('user', function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        })->latest()->paginate(5);

        return view('order.order_all', compact('orders'));
    }

    public function order_details($id)
    {
        $order = Order::findOrFail($id);

        return view('order.order_details', compact('order'));
    }

    public function current_order()
    {
        $orders = Order::where('status', '0')->latest()->paginate(5);

        return view('order.order_current', compact('orders'));
    }
}
