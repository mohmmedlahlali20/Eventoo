<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservation = Reservation::all();

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
 
     public function store(Request $request)
     {
         $rules = [
             'id_event' => 'required|exists:evenements,id',
         ];
     
         $validator = Validator::make($request->all(), $rules);
     
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
     
         $event = Evenement::find($request->id_event);
     //dd( $event);
         if ($event->places_number > 0) {
             $reservation = new Reservation();
             $reservation->id_user = auth()->id();
             $reservation->id_event = $request->id_event;
             $reservation->status = 'valid';
             $reservation->save();
     
             //dd( $reservation->id);
             $reservation->save();
             $reservation->ticket_number = $reservation->id;
             $reservation->save();
             $event->decrement('places_number');
     
             return redirect()->route('reservation.index')->with('success', 'Événement réservé avec succès.');
         } else {
             return redirect()->route('reservation.index')->with('error', 'Désolé...');
         }
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
    public function update(Request $request, Reservation $reservation)
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
