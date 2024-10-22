<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return "hello zul";
});


Route::get('/front', [FrontController::class, 'index']);