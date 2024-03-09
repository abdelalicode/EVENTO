<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrganisatorController extends Controller
{


    public function OrgaDashboard()
    {
        $this->authorize('access-organisateur');
        return view('Organisator.orgamain');
    }

    public function OrgaEvents()
    {
        $this->authorize('access-organisateur');

        $categories = Category::all();
        $places = Place::all();

        $organisator_events = Event::where('user_id', Auth::user()->id)->get();

        return view('Organisator.events', compact('organisator_events', 'categories', 'places'));
    }

    public function getStats()
    {
        $user_id = auth()->id();

        $reservationsByEvent = DB::table('events')
            ->select('events.id', 'events.title', DB::raw('COUNT(reservations.id) AS total_reservations'))
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->join('reservations', 'tickets.id', '=', 'reservations.ticket_id')
            ->where('events.user_id', $user_id)
            ->groupBy('events.id', 'events.title')
            ->get();

        $results = DB::table('categories')
            ->join('events', 'categories.id', '=', 'events.category_id')
            ->join('tickets', 'events.id', '=', 'tickets.event_id')
            ->join('reservations', 'tickets.id', '=', 'reservations.ticket_id')
            ->where('events.user_id', $user_id)
            ->groupBy('categories.id', 'categories.name')
            ->select('categories.name AS category_name', DB::raw('COUNT(reservations.id) AS total_reservations'))
            ->get();


        return view('Organisator.stats', compact('reservationsByEvent', 'results'));
    }
}
