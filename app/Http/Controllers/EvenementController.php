<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Http\Requests\EventRequest;
use Illuminate\Support\Facades\Auth;

class EvenementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Events = Evenement::latest('created_at')->where('status', 'available')->take(5)->get();
        //dd($Events);
        return view('organisateur.index' ,compact('Events'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Categories = Category::all();
        //dd($Categories);
        $users =Auth::user();
        //dd($users);
        return view('organisateur.CreateEvent' , compact('Categories' , 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EventRequest $request)
    {

        $userId = Auth::id();
        $validatedData = $request->validated();
        $validatedData['id_organisateur'] = $userId;
        $categoryId = $request->input('category');
        $validatedData['category_id'] = $categoryId;
       $event = Evenement::create($validatedData);
       return redirect()->route('Event.index')->with('success', 'Event created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Evenement $evenement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Evenement $evenement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $evenement)
    {
        //
    }
}