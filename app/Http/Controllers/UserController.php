<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user()
    {
        $data['getRecord'] = User::getRecordUser();
        return view('backend.user.list', $data);
    }
    public function add_user(Request $request)
    {
        return view('backend.user.add');
    }

    public function insert_user(Request $request)
    {
      $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required',

        ]);

          $user = User::create([
              'name'  => $request->name,
              'email' => $request->email,
              'password'  => Hash::make($request->password),
              'status'    => $request->status
          ]);

          if ($user){
              return redirect()->route('user')->with('success', "New User Added Successfully !!");
          }
    }

    public function edit_user($id)
    {
        $data['getRecord'] = User::getSingle($id);
        return view('backend.user.edit', $data);

    }
    public function update_user($id, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,

        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->status = $request->status;

        $updated = $user->save();

        if ($updated) {
            return redirect()->route('user')->with('success', "User Record Updated Successfully !!");
        } else {
            return back()->with('error', "Failed to Update User Record.");
        }
    }


    public function delete_user($id)
    {
        $save = User::getSingle($id);
        $save->is_delete = 1;
        $save->save();

        return redirect()->back()->with('success', "User Deleted Successfully !!");
    }

}
