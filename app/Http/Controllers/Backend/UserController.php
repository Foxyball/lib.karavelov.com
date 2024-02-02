<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function all_user()
    {

        $users = User::latest()->paginate(5);

        return view('user.user_all', compact('users'));
    }

    public function add_user()
    {
        return view('user.user_add');
    }

    public function store_user(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'birth_date' => 'required'
            ],
            [
                'name.required' => 'Полето за име е задължително!',
                'email.required' => 'Полето за имейл е задължително!',
                'email.email' => 'Моля въведете валиден имейл!',
                'email.unique' => 'Този имейл вече съществува!',
                'password.required' => 'Полето за парола е задължително!',
                'birth_date.required' => 'Полето за рождена дата е задължително!'
            ]
        );

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gsm = $request->gsm;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);
        $user->role = "admin";
        $user->active = $request->active;
        $user->birth_date = $request->birth_date;
        $user->email_verified_at = Carbon::now();
        $user->save();

        $notification = array(
            'message' => 'Успешно добавихте потребител!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);
    }

    public function edit_user($id)
    {
        $user = User::findOrFail($id);

        return view('user.user_edit', compact('user'));
    }

    public function update_user(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->gsm = $request->gsm;
        $user->address = $request->address;
        $user->role = "admin";
        $user->active = $request->active;
        $user->birth_date = $request->birth_date;
        $user->save();

        $notification = array(
            'message' => 'Успешно редактирахте потребител!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);
    }

    public function delete_user($id)
    {
        $user = User::findOrFail($id);

        if (!is_null($user)) {
            $user->delete();
        }

        $notification = array(
            'message' => 'Успешно изтрихте потребител!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function change_password($id)
    {
        $user = User::findOrFail($id);

        return view('user.user_change_password', compact('user'));
    }

    public function update_password(Request $request)
    {

        $new_password = $request->new_password;

        $request->validate([
            'new_password' => 'required'
        ],
        [
            'new_password.required' => 'Полето за нова парола е задължително!',
        ]);

        $id = $request->id;
        $user = User::findOrFail($id);

        User::whereId($id)->update([
            'password' => Hash::make($new_password)
        ]);

        $notification = array(
            'message' => 'Успешно променихте паролата!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.user')->with($notification);
    }
}
