<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class RegistrarLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:registrar');
    }

    public function showLoginForm()
    {
        return view('registrar.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email'     => 'required|email',
            'password'  => 'required|min:6'
        ]);

        if (Auth::guard('registrar')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) 
        {
            return redirect()->intended(route('registrar.dashboard'));
        }

        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
