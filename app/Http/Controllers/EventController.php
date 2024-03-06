<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function unapproved()
    {
        $unapproveds = Event::where('approved', 0)->get();
        return view('Admin.unapproved', compact('unapproveds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        $this->authorize('access-organisateur');

        $date = $request->date;
        
        $validatedData = $request->validated();

        $validatedData['date'] = date('Y-m-d', strtotime($date));
    
        $event = Event::create($validatedData);
        $event->addMediaFromRequest('image')->toMediaCollection('eventimages');
        return redirect()->route('organisateur.events');
      
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $this->authorize('access-organisateur');
        $event->update($request->all());
        return redirect()->route('organisateur.events');
    }

    public function approve(Request $request)
    {
        $this->authorize('access-admin');
        $event = Event::find($request->id);

        $event->update(['approved'=> 1]);

    }
   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
       $this->authorize('access-organisateur');
       $event->delete();
       return redirect()->route('organisateur.events');
    }
}
