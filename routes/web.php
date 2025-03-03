<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    echo "Hello World!";
});

Route::get('/test', [TestController::class, 'testAction']);

Route::get('/form', [TestController::class, 'viewForm']);
Route::post('/submit', [TestController::class, 'submitForm2']);

