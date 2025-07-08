<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::with('category')->get();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("comics.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'title' => 'required|max:255',
                'number' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'category_id' => 'required|exists:categories,id',
                'release_date' => 'required'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            // Print the first invalid field name
            $firstField = array_key_first($e->errors());
            dd("Invalid field: " . $firstField);
        }
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        $comic = new Comic();
            $comic->title = $request->title;
            $comic->number = $request->number;
            $comic->image = "images/{$imageName}";
            $comic->category_id = $request->category_id;
            $comic->release_date = $request->release_date;
            //$comic->user_id = $request->user_id;
            $comic->save();

            return redirect('comics')->with('success', 'Comic created successfully');
    }

    
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        $categories = Category::all();
        return view('comics.edit', compact('comic', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $comic = Comic::findOrFail($id);

            $request->validate([
                'title' => 'required|max:255',
                'number' => 'required',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
                'category_id' => 'required|exists:categories,id', // Verifica se a categoria existe
                'release_date' => 'required'
            ]);

            $comic->title = $request->title;
            $comic->number = $request->number;
            $comic->category_id = $request->category_id;
            $comic->release_date = $request->release_date;
            //$comic->user_id = $request->user_id;

            if(!is_null($request->image)) {
                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $comic->image = 'images/'.$imageName;
            }
            $comic->save();

            return redirect('comics')->with('success', 'Comic updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
            $comic->delete();
            return redirect('comics')->with('success', 'Comic deleted successfully.');
    }
}
