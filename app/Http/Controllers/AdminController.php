<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    // views

    public function admin(){
        dd(auth('admin')->user()->name);
    }




    //requests

    public function login_r(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);



        if(auth('admin')->attempt($formFields)) {
//            $request->session()->regenerate();
            return redirect('/admin')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }



    // hidden function
    public function register_r(Request $request){
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = admin::create($formFields);

        // Login
        auth('admin')->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }
}
