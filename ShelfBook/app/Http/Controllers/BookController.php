<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookValidateRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return response()->json([
            "status" => 'success',
            'books' => $books
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BookValidateRequest $request)
    {
        $bookInfo = $request->validated();

        $record = Book::create($bookInfo);
        return response()->json([
            "status" => 'success',
            'book' => $record
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::findOrFail($id);
        return response()->json([
            "status" => 'success',
            'book' => $book
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BookValidateRequest $request, string $id)
    {
        $bookInfo = $request->validated();
        $book = Book::findOrFail($id);
        $book->update($bookInfo);

        return response()->json([
            "status" => 'success',
            'book' => $book
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return response()->json([
            "status" => 'success',
        ], 200);
    }
}
