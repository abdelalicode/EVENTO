<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:access-admin');
    }

    public function AdminDashboard()
    { 
         return view('Admin.adminmain');
    }

    public function allusers()
    { 

        $allusers = User::with('role')
                    ->whereNotIn('id', [Auth::user()->id])
                    ->get();

        return view('Admin.users', compact('allusers'));
    }

    public function banuser(Request $request , User $user)
    {
        $user->update(['restricted' => 1]);
        return redirect()->back()->with('success', 'User has been banned successfully.');

    }
}
