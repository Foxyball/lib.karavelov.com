<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{


    public function admin_change_password()
    {

        return view('admin.change_password');
    }

    public function admin_update_password(Request $request)
    {
        //validation
        $request->validate(
            [
                'old_password' => 'required',
                'new_password' => 'required|confirmed'
            ],
            [
                'old_password.required' => 'Полето за стара парола е задължително!',
                'new_password.required' => 'Полето за нова парола е задължително!',
                'new_password.confirmed' => 'Полето за нова парола не съвпада!'
            ]
        );

        // compare the old password with current password
        if (!Hash::check($request->old_password, Auth::user()->password)) {

            $notification = array(
                'message' => 'Старата парола не съвпада!',
                'alert-type' => 'error'
            );

            return redirect()->back()->with($notification);
        }

        // update the password
        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);


        $notification = array(
            'message' => 'Успешно променихте паролата!',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.change_password')->with($notification);
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
