<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    public function edit_password()
    {
        return view('backend.password.change_password');
    }
    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|string|min:5|confirmed',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {

            return back()->withErrors(['current_password' => 'The Current Password is Incorrect.']);
        }


        $user = auth()->user();
        $user->password = Hash::make($request->new_password);
        $user->save();


        Auth::logout();

        return redirect('login')->with('success', 'Password Changed Successfully.! Please Login with Your New Password.!');
    }
}
