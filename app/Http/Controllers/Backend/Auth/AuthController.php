<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    function login()
    {
        // User::create([
        //     'name' => 'admin',
        //     'email' => 'admin@gamil.com',
        //     'password' => Hash::make('123456'),
        //     'email_verified_at' => Carbon::now(),
        // ]);

        return view('backend.auth.login');
    }

    function authenticate(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $remember = $request->has('remember') ? true : false;

        if (Auth::attempt($validated, $remember)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->back();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
