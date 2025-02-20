<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $publications = Publication::paginate(5);
        return view('publication.index', compact('publications'));
    }

    public function Experiences()
    {
        $publications = Publication::paginate(5);
        return view('publication.experiences', compact('publications'));
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
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'user_id' => 'required|exists:users,user_id',
            'image_url' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image_url')) {
            $imagePath = $request->file('image_url')->store('publication', 'public');
            $validateData['image_url'] = $imagePath;
            // dd($imagePath);
        }
        // dd($request->hasFile('image'));

        // dd($validateData);
        Publication::create($validateData);

        return redirect()->route('publication.index')->with('success', 'Experience shared successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $publication = Publication::findOrFail($id);
        return view('publication.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        return view('publication.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
