<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:access-admin');
    }

    public function AdminDashboard()
    { 
         echo "ALLO ADMIN";
    }
}
