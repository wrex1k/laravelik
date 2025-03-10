<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookSacController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, int $id) {
        $format = $request->input('format');
        return response("Toto je kniha s ID = $id vo formáte: $format.");
    }
}
