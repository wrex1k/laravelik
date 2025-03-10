<?php

use App\Http\Controllers\BookApiController;
use App\Http\Controllers\BookRestController;
use App\Http\Controllers\BookRpcController;
use App\Http\Controllers\BookSacController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    echo "Hello API!";
});

Route::get('/test', [TestController::class, 'testAction']);


Route::post('/books/{id}/borrow', [BookRpcController::class, 'borrowBook']);
Route::post('/books/{id}/return', [BookRpcController::class, 'returnBook']);

//Route::post('/books/{id}/borrow2', [BookRpcController::class, 'borrowBookService']);


Route::post('/book/{id}', BookSacController::class);

Route::resource('books', BookRestController::class);

//Route::apiResource('books', BookApiController::class); //pozor na rovnaké smerovanie, vykoná sa iba to posledné
