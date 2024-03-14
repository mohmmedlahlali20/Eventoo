<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Evenement;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = category::paginate(5);
        return view('admin.Category',compact('category'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

     public function destroy(Category $category)
     {

         $eventsWithCategory = Evenement::where('category_id', $category->id)->exists();

         if ($eventsWithCategory) {
             return redirect()->back()->with('error', 'Cannot delete category. It is associated with events.');
         }

         $isDeleted = $category->delete();
     
         if ($isDeleted) {
             return redirect()->back()->with('success', 'Category deleted successfully');
         }
     
         return redirect()->back()->with('error', 'Failed to delete category');
     }
     


    
}
