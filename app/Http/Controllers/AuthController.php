<?php

namespace App\Http\Controllers;

use App\Models\Register; // Use Register model
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:register', // Ensure email is unique in 'register' table
            'password' => 'required|min:6',
        ]);

        $user = new Register([ // Create new Register instance
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->save();

        return redirect()->route('login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $credentials = [
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (auth()->attempt($credentials)) {
        // Authentication passed...
        return redirect()->route('landing');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
}

}
