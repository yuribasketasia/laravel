<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        if (Auth()->attempt($request->only('email', 'password')));
             return redirect()->back()->with('status', 'Invalid login details');

        return redirect()->route('dashboard');
    }
}
