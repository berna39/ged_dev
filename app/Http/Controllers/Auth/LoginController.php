<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) 
        {
            return redirect()->route('home');
        }
        
        return redirect('login')->with('errors', 'login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
