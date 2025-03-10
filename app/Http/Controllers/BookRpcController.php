<?php

namespace App\Http\Controllers;

use App\Services\BookService;
use Illuminate\Http\Request;

class BookRpcController extends Controller
{
    public function borrowBook(Request $request, int $id) {
        $userId = $request->input('user_id');
        return response()->json(['message' => "User s ID = $userId si požičal knihu s ID = $id."]);
    }

    public function returnBook(Request $request, int $id) {
        $condition = $request->input('condition');
        return response()->json(['message' => "Kniha s ID = $id bola vrátená v stave: $condition."]);
    }

    public function borrowBookService(Request $request, int $id, BookService $bookService) {
        $userId = $request->input('user_id');
        $message = $bookService->borrow($id, $userId);
        return response()->json(['message' => $message]);
    }
}
