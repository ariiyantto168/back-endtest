<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function view()
    {
        return view('login');

        
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);


        // return $request->all();

        // $credentials = $request->only('email', 'password');
        // if (Auth::attempt($credentials)) {
        //     return redirect()->intended('article/list');
        // }

        $userdata = $request->only('email', 'password');

        // return $userdata;
        return redirect('article/list');

        // if (User::where('email', $userdata['email'])->first()->password === $userdata['password']) {
        //     return true;
        //     // return redirect('article');
        // } else {
        //     return redirect('login');

        // }
    }
}
