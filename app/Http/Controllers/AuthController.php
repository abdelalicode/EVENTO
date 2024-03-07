<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return $this->redirectTo();
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
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
        $randomStr = Str::random(2);
        $user = Session::get('validateduser');
        $user['role_id'] = 2;
        $user['password'] = Hash::make($user['password']);
        $user['username'] = strtolower($user['firstname'] . $user['lastname'] . $randomStr);
        $organisator = User::create($user);
        return redirect()->route('signinview');
    }



    public function setparticipant()
    {
        $user = Session::get('validateduser');
        $user['role_id'] = 3;
        $user['password'] = Hash::make($user['password']);
        $client = User::create($user);
        return redirect()->route('signinview');
    }

    private function redirectTo()
    {
        $user = Auth::user();
        switch ($user->role->name) {
            case 'admin':
                return redirect('/AdminDashboard');
                break;
            case 'organisateur':
                return redirect('/organisateur/dashboard');
                break;
            case 'participant':
                return redirect('/');
                break;
            default:
                return redirect('/login');
                break;
        }
    }

    public function logout()
    {
        session()->flush();;
        Auth::logout();

        return redirect()->route('homepage');

    }
}
