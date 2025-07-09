<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
     public function index()
    {
        
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("categories/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|max:255',
        ]);

        $category = new Category();
            $category->name = $request->name;
            $category->save();

            return redirect('categories')->with('success', 'category created successfully');
    }

    public function edit(string $id)
    {
        $category = category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

            $category->name = $request->name;

            $category->save();

            return redirect('comics')->with('success', 'Comic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
            $category->delete();
            return redirect('categories')->with('success', 'category deleted successfully.');
    }
}
