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
        if (auth()->user()->hasRole('Organisateur')) {
            $Events = Evenement::where('id_organisateur', auth()->user()->id)->get();
        } else {
            $Events = Evenement::all();
        }
 
        $Categories =  Category::all();
        return view('Users.index' ,compact('Events' , 'Categories'));
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
        //dd($validatedData['image']);
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
    public function edit(Evenement $Event)
    { 
        //dd($Event);
        $Categories = Category::all();
        return view('organisateur.Edit', compact('Event', 'Categories'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, Evenement $Event)
    {
        $userId = Auth::id();
            $validatedData = $request->validated();
            

            if($request->hasFile('image')){
                $validated['image']=$request->file('image')->store('event','public');
            } else{
                $validated['image']=$request->input('image');
            }

            $Event->fill( $validatedData )->save();
            return redirect()->route('Event.index')->with('success', 'Event updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evenement $Event)
    {
        //dd($Event->delete());
    
            $Event->delete(); 
        return redirect()->route('User.index')->with('success', 'Event canceled successfully.');
    }

    public function search(){
        $search = $_GET['query'];
        //dd($search);
        if ($search !== null) {
            $Evenet = Evenement::where('titre', 'LIKE', '%' . $search . '%')->get();
            return view('Users.search', compact('Evenet'));
        } else {
            return redirect()->back()->with('error', 'Search parameter missing');
        }
    }


    public function filtrage(Request $request)
    {
        $selectedCategory = $request->category;
        $Categories = Category::all();

        $query = Evenement::with('category');
    
        if ($selectedCategory) {
            $query->where('category_id', $selectedCategory);
        }

        $filteredData = $query->get();
    
        return view('Users.filtrage', compact('filteredData', 'Categories'));
    }


}