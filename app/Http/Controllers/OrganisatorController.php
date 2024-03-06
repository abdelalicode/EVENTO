<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
