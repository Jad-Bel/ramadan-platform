<?php

namespace App\Http\Controllers;

use App\Models\Recettes;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;

class RecettesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $recettes = Recettes::with('categorie')->paginate(6);

        // dd($recettes);
        return view('recettes.index', compact('recettes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'user_id' => 'required|exists:users,user_id',
            'categorie_id' => 'required|exists:categories,categorie_id',
            'meal_type' => 'required|in:iftar,suhoor,other',
            'prep_time' => 'nullable|integer|min:1',
            'cook_time' => 'nullable|integer|min:1',
            'servings' => 'nullable|integer|min:1',
            'additional_notes' => 'nullable|string',
        ]);

        // dd($request->all());
        // dd($validateData);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('recettes', 'public');
            $validateData['image'] = $imagePath;
        }

        Recettes::create($validateData);

        return redirect()->route('recettes.index')->with('success', 'Recipe added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $recettes = Recettes::with('user', 'categorie')->findOrFail($id);
        return view('recettes.show', compact('recettes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recettes $recettes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recettes $recettes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recettes $recettes)
    {
        //
    }
}
