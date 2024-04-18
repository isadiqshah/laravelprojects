<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AccountSettingController extends Controller
{
    public function AccountSetting()
    {
        $data['accountSetting'] = User::getSingle(Auth::user()->id);
        return view('backend.profile.account-setting', $data);
    }

    public function UpdateAccountSetting(Request $request)
    {
        $request->validate([
            'profile_pic' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_pic')) {
            $profilePic = $request->file('profile_pic');
            $fileName = time() . '.' . $profilePic->getClientOriginalExtension();
            $filePath = 'upload/profile/' . $fileName; // Adjusted file path
            Storage::disk('public')->put($filePath, file_get_contents($profilePic));

            auth()->user()->update(['profile_picture' => $filePath]);

            return redirect()->back()->with('success', 'Profile picture uploaded successfully.');
        }
        return redirect()->back()->with('error', 'Failed to upload profile picture.');
    }
}
