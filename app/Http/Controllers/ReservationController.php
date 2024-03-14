<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
//use SimpleSoftwareIO\QrCode\Facades\QrCode;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->user()->hasRole('admin')) {
            $reservations = Reservation::all();
        } else {
            $reservations = Reservation::where('id_user', auth()->user()->id)->get();
            //dd($reservations);
        }
    
        return view('reservation.index', compact('reservations'));
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
     
         if ($event->places_number > 0) {
            
             $reservedPlaces = Reservation::where('id_event', $request->id_event)->count();
             $availablePlaces = $event->places_number - $reservedPlaces;
     
             if ($availablePlaces > 0) {
                 $reservation = new Reservation();
                 $reservation->id_user = auth()->id();
                 $reservation->id_event = $request->id_event;
                 $reservation->status = 'valid';
                 $reservation->save();
                 $reservation->ticket_number = $reservation->id;
                 $reservation->save();
                 $reservations = Reservation::all();
     
                 return view('reservation.index', compact('reservations'))->with('success', 'Reservation successful');
                 
             } else {
                 return redirect()->back()->with('error', 'Désolé, plus de places disponibles.');
             }
         } else {
             return redirect()->back()->with('error', 'Désolé, cet événement n\'a pas de places disponibles.');
         }
     }
     
     
    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        
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
        $reservation->delete();
        //dd($reservation->delete());
        return  redirect()->back()->with('success', 'reservation cancled');
    }

}
