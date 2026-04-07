<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenreValidateRequest;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenrerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = Genre::all();

        return response()->json($genres);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GenreValidateRequest $request)
    {
        $genre = $request->validated();
        $record = Genre::create($genre);

        return response()->json($record);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::findOrFail($id);

        return response()->json($genre);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GenreValidateRequest $request, string $id)
    {
        $genreInfo = $request->validated();
        $genre = Genre::findOrFail($id);
        $genre->update($genreInfo);
        return response()->json($genre);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        return response()->json("Genre successfully deleted");
    }
}
