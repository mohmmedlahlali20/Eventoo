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
        $Events = Evenement::latest('created_at')
        ->where('status', 'available')
        ->take(5)
        ->get();
        return view('Users.index' ,compact('Events' ));
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
        
            if ($request->hasFile('image')) {
                $validatedData['image'] = $request->file('image')->store('event', 'public');
            }
        
            $event = Evenement::create($validatedData);
            
       //dd($event);
       return redirect()->route('Event.index')->with('success', 'Event created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $evenement = Evenement::with(['organisateur', 'category'])->findOrFail($id);
    
        return view('Users.show', compact('evenement'));
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
        $evenento = Evenement::find($evenement);
            $evenement->delete(); 
        return redirect()->route('Users.index')->with('success', 'Event canceled successfully.');
    }

    public function search(){
        $search = $_GET['query'];
        //dd($search);
        $Evenet = Evenement::where('titre' , 'LIKE' , '%' .$search.'%')->get();
        //dd($Evenet);
        return view('Users.search',compact('Evenet'));
    }

    public function filter(Request $request)
{
    $categoryId = $request->input('category');

    $filteredEvents = Evenement::latest('created_at')
        ->where('status', 'available')
        ->when($categoryId, function ($query) use ($categoryId) {
            $query->where('category_id', $categoryId);
        })
        ->take(5)
        ->get();

        $AllCategory = Category::all();

    return view('Users.index', compact('filteredEvents', 'AllCategory'));
}   
}