<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $username = $request->username;
        $password = $request->password;

        $remember_me = $request->has('remember_me') ? true:false;
        if (auth()->attempt(['username' => $username, 'password' => $password], $remember_me)){
            auth()->user();
        }else
        {
            return back()->with('status', 'Username atau Password salah!');
        };
        
        return redirect('/');
    }
}
