<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    
    public function signinview()
    {
        return view('Auth.signin');
    }

    public function signupview()
    {
        return view('Auth.signup');

    }

    public function signin(Request $request)
    {
        
    }

    public function signup(Request $request)
    {
       
        

        $validateduser = $request->validate([
            'firstname' => 'required|string|min:4|max:12',
            'lastname' =>  'required|string|min:4|max:12',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
      
        
        Session::put('validateduser', $validateduser);
        return view('Auth.rolechoice', compact('validateduser'));
    }

    public function setorganisator()
    {
        $user = Session::get('validateduser');
        $user['role_id'] = 2;
        $user['password'] = Hash::make($user['password']);
        dd($user);
    }



    public function setparticipant()
    {
        $user = Session::get('validateduser');
        $user['role_id'] = 3;
        dd($user);
    }
}
