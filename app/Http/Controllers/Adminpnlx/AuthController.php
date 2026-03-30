<?php

namespace App\Http\Controllers\Adminpnlx;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view("adminpnlx.login");
    }

    public function logins(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ]
        );

        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');

        // ✅ attempt login
        if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
            $request->session()->regenerate();

            return redirect()->route('Admin.Dashboard')
                ->with('success', 'User Login Successfully.');
        }

        return Redirect::back()
            ->with('error', 'Invalid email or password')
            ->withInput();
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('Admin.login')->with('success', 'User Logout Successfully.');
    }
}
