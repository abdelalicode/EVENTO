<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
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
        $this->authorize('access-organisateur');

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
        $date = $request->date;
        
        $validatedData = $request->validated();

        $validatedData['date'] = date('Y-m-d', strtotime($date));
    
        Event::create($validatedData);
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
        
        $event->update($request->all());
        return redirect()->route('organisateur.events');
    }

   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
       $event->delete();
       return redirect()->route('organisateur.events');
    }
}
