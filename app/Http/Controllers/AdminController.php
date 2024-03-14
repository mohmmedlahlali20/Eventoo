<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Evenement;
use App\Models\Reservation;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $AllUsers = User::paginate(5);
        return view('admin.index', compact('AllUsers'));
    }


    public function evento(){
        $Event = Evenement::with('organisateur', 'category')->paginate(5);
        //dd($Event);
        return view('admin.event', compact('Event'));
    }

    public function reserv(){
        $reservatio = Reservation::paginate(10);
        return view('admin.reservation', compact('reservatio'));
    }

    public function updateStatus(Request $request, Reservation $reservation)
        {
            
   
                if ($reservation && $reservation->event->id_organisateur == auth()->user()->id) {
                    $newStatus = $reservation->status === 'valid' ? 'invalid' : 'valid';
                    $reservation->update(['status' => $newStatus]);
                    return redirect()->back();
                }
            
                abort(404, 'Reservation not found or unauthorized');
            
            
        }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.AddCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        $validatedData = $request->validated();
        $category = new Category([
            'category_name' => $validatedData['category_name'],
        ]);
   
        $category->save();

        return redirect()->route('admin.create')->with('success', 'Category is added successfully');
    }

    public function updateValidation(Request $request, $id)
{
    $event = Evenement::find($id);

    if ($event) {
        $event->update(['validation' => $event->validation === 'valid' ? 'invalid' : 'valid']);
        return redirect()->back();
    }


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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {
        //dd($admin);
        $admin->delete();
        return back()->with('success', 'Operator deleted successfully.');
    }

  
public function getStats()
{
    $userCount = User::count();
    $activeUserCount = User::where('deleted_at')->count();
    $categoryCount = Category::count();
    $eventCount = Evenement::count();
    $reservationCount = Reservation::count();
    $reservationInvalid = Reservation::where('status', 'invalid')->count();
    $reservationValid = Reservation::where('status', 'valid')->count();
    $reservationCountDeleted = Reservation::where('deleted_at')->count();
    $unvalidatedEventCount = Evenement::where('validation', 'invalid')->count();
    $validatedEventCount = Evenement::where('validation', 'valid')->count();

    return view('dashboard', compact(
        'userCount',
        'activeUserCount',
        'categoryCount',
        'eventCount',
        'reservationCount',
        'reservationInvalid',
        'reservationValid',
        'reservationCountDeleted',
        'unvalidatedEventCount',
        'validatedEventCount'
    ));
}
}
