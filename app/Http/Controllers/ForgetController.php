<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;


class ForgetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function show()
    {
        return view('Auth.resetform');
    }

    public function sendlink(Request $request)
    {
        $email = $request->input('email');

        $user = User::where('email', $email)->first();
        if (!$user) {
            return back()->withErrors(['email' => 'We could not find a user with that email address.']);
        }


        $token = Str::random(64);

        DB::table('password_reset_tokens')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => now()
        ]);

        $link = URL::route('password.reset', ['token' => $token, 'email' => $email]);

        Mail::to($email)->send(new ResetPasswordMail($link));

        return back()->with('status', 'We have emailed your password reset link!');
    }


    public function breset($token, $email)
    {

        $passwordReset = DB::table('password_reset_tokens')
            ->where('email', $email)
            ->where('token', $token)
            ->first();

        if (!$passwordReset) {
            return redirect()->route('signinview');
        }

        return view('Auth.password', compact('token', 'email'));    
    }

    public function resetPassword(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('signinview');
        }

        $validatedpass = $request->validate([
            'password' => 'required|min:6|max:15|confirmed'
        ]);

        $user->password = Hash::make($validatedpass['password']);
        $user->update();

        DB::table('password_reset_tokens')
            ->where('email', $request->email)
            ->delete();

        return redirect()->route('signinview')->with('success', 'Password reset successfully!');
    }
}
