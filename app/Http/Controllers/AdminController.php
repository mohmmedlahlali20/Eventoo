<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Evenement;
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
        
        //dd($AllUsers);

        return view('admin.index', compact('AllUsers'));
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

    public function Statistique()
    {
        $userCount = User::count();
        $categoryCount = Category::count();
        $eventCount = Evenement::count();
    
        return view('dashboard', compact('userCount', 'categoryCount', 'eventCount'));
    }
}
