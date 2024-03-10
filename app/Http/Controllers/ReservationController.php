<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Requests\StoreReservationRequest;
use App\Http\Requests\UpdateReservationRequest;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReservationRequest $request)
    {
        $reservation = Reservation::create($request->validated());

        if ((int) $request->status === 1) {
            $ticketId = $request->ticket_id;
            $ticket = Ticket::findOrFail($ticketId);
            $ticket->decrement('quantity');
        }

        $message = (int) $request->status === 1 ? 'Reservation confirmed.' : 'Reservation is pending. Please wait for confirmation.';
        
        return redirect()->back()->with('message', $message);
    }
    
    public function myreservations()
    {
        $myreservations = Reservation::where('user_id', Auth::user()->id)->get();
        return view ('Home.myreservations', compact('myreservations'));
    }

    public function pendingreservations()
    {
        $pendingreservations = Reservation::where('status', 0)->get();
        return view ('Organisator.pendingres', compact('pendingreservations'));
    }

    public function approvereservation(Reservation $reservation)
    {
        $reservation->update(['status' => 1]);

        $ticket = Ticket::where('id', $reservation->ticket_id);
        $ticket->decrement('quantity');
        return redirect()->route('pendingreservations');
    }
    

    public function getTicket(Reservation $reservation)
    {
        return view('ticket', compact('reservation'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationRequest $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
