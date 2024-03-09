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

    public function getStats()
    {
        $user_id = auth()->id();

        $reservationsByEvent = DB::table('events')
            ->select('events.id', 'events.title', DB::raw('COUNT(reservations.id) AS total_reservations'))
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->join('reservations', 'tickets.id', '=', 'reservations.ticket_id')
            ->groupBy('events.id', 'events.title')
            ->get();

        $results = DB::table('categories')
            ->join('events', 'categories.id', '=', 'events.category_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->join('reservations', 'tickets.id', '=', 'reservations.ticket_id')
            ->groupBy('categories.id', 'categories.name')
            ->select('categories.name AS category_name', DB::raw('COUNT(reservations.id) AS total_reservations'))
            ->get();


        return view('Admin.stats', compact('adminreservationsByEvent', 'adminresults'));
    }
}
