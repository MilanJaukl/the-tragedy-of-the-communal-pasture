<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            return redirect()->route('get.admin.index')->with('success', 'Welcome back, ' . $user->name);
        }
        return redirect()->back()->with('error', 'Invalid credentials');
    }
}
