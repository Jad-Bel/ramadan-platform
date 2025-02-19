<?php

namespace App\Http\Controllers;

use App\Models\Recettes;
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
