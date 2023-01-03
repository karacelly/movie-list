<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegisterPage(Request $request)
    {
        return view('register');
    }

    public function showProfilePage(Request $request)
    {
        return view('profile');
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirm' => 'required|same:password'
        ]);

        $user = new User([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $user->save();

        return redirect()->intended('/login')->with('success', 'Registration complete.');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required | email',
            'dob' => 'date',
            'phone' => 'required|min:3|max:15',
        ]);
        $user = User::find(Auth::id());

        $user->username = $request->username;
        $user->email =  $request->email;

        $user->dob = $request->dateOfBirth;
        $user->phone = $request->phone;

        $user->save();

        $request->session()->regenerate();

        return back()->with('success', 'Profile updated!');
    }

    public function updateImage(Request $request)
    {
        $request->validate([
            'img_url' => 'required',
        ]);
        $user = User::find(Auth::id());

        $user->image = $request->img_url;

        $user->save();

        $request->session()->regenerate();

        return back()->with('success', 'Image updated!');
    }
}
