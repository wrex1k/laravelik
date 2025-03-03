<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    echo "Hello API!";
});

Route::get('/test', [TestController::class, 'testAction']);
