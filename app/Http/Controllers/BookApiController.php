<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'books' => [
                ['id' => 1, 'title' => 'Meno vetra', 'author' => 'Patrick Rothfuss'],
                ['id' => 2, 'title' => 'Nadácia', 'author' => 'Isaac Asimov'],
                ['id' => 3, 'title' => 'Pán prsteňov', 'author' => 'J.R.R. Tolkien'],
            ]
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        return response()->json([
            'message' => "Kniha s názvom '$title' bola vytvorená."
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            'book' => [
                'id' => $id,
                'title' => "Ukážková kniha $id",
                'author' => 'Neznámy autor'
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $newTitle = $request->input('title');
        return response()->json([
            'message' => "Knihe s ID = $id bol upravený jej názov na '$newTitle'."
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            'message' => "Kniha s ID $id bola vymazaná."
        ]);
    }
}
