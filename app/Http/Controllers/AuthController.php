<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $getPage = Page::getSlug('login');
        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';
        return view('auth.login', $data);
    }

    public function register()
    {
        $getPage = Page::getSlug('register');
        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';
        return view('auth.register', $data);
    }

    public function forgot()
    {
        $getPage = Page::getSlug('forgot');
        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';
        return view('auth.forgot', $data);
    }

    public function reset($token)
    {
        $getPage = Page::getSlug('reset');
        $data['meta_title'] = $getPage->meta_title ?? '';
        $data['meta_description'] = $getPage->meta_description ?? '';
        $data['meta_keywords'] = $getPage->meta_keywords ?? '';
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.reset', $data);
        }

        abort(404);
    }
    public function post_reset($token, Request $request)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if(!empty($user))
        {
            if ($request->password === $request->cpassword)
            {
                $user->password = Hash::make($request->password);
                if (empty($user->email_verified_at))
                {
                    $user->email_verified_at = date('Y-m-d H:i:s');
                }
                $user->remember_token = Str::random(40);
                $user->save();

                return redirect('login')->with('success', "Your Password Reset Successfully !!");

            }
            else
            {
                return redirect()->back()->with('error', "Password and Confirm Password does not match.");

            }
        }
        else
        {
            abort(404);
        }
    }

    public function forgot_password(Request $request): ?\Illuminate\Http\RedirectResponse
    {
        $user = User::where('email', '=', $request->email)->first();
        if(!empty($user))
        {
            $user->remember_token = Str::random(40);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', "Reset Link sent to your email, please check.");


        }
        else
        {
            return redirect()->back()->with('error', "Email not Found.");

        }
    }

    public function auth_login(Request $request)
    {
        $remember = !empty($request->remember);
        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (Auth::attempt($credentials, $remember))
        {

            if (!empty(Auth::user()->email_verified_at))
            {
                // Redirect based on role
                if (Auth::user()->role === 1) {
                    return redirect()->route('dashboard')->with('success', "Admin Logged in Successfully!");
                }

                return redirect()->route('home')->with('success', "Logged in Successfully!");
            }

            $user_id = Auth::user()->id;
            Auth::logout();

            $save = User::find($user_id);
            $save->remember_token = Str::random(40);
            $save->save();

            Mail::to($save->email)->send(new RegisterMail($save));
            return redirect()->back()->with('success', "Please, First Verify Your Email ?");
        }

        return redirect()->back()->with('error', "Please Enter Correct Email & Password");
    }



    public function create(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            'password'  => 'required'
        ]);

        $save = new User;
        $save->name     = $request->name;
        $save->email    = $request->email;
        $save->password = Hash::make($request->password);
        $save->remember_token = Str::random(40);

        $save->save();

        Mail::to($save->email)->send(new RegisterMail($save));

        return redirect('login')->with('success', "Your Account Register Successfully But Verify Your Email Address First...");
    }

    public function AdminRegistrationForm()
    {
        return view('auth.admin_register');
    }

    public function AdminRegister(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user with admin role
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = 1; // Set role to '1' for admin
        $user->save();

        // Redirect to login page with success message
        return redirect()->route('login')->with('success', 'Admin Registered Successfully.!!');

    }

    public function verify($token)
    {
        $user = User::where('remember_token', '=', $token)->first();
        if (!empty($user))
        {
            $user->email_verified_at = date('Y-m-d H:i:s');
            $user->remember_token = Str::random(40);

            $user->save();

            return redirect('login')->with('success', "Your Account Verified Successfully !!");

        }

        abort(404);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
