<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username|alpha',
            'password' => 'required|confirmed'
        ]);

        $user = new User();

        $user->name = $request->name;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->roles = "admin";

        $user->save();
        return redirect('/login');
    }
}
