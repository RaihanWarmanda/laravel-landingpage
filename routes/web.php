<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FrontController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return "hello zul";
});


Route::get('/front', [FrontController::class, 'index']);

Route::get('/landingpage', [TaskController::class, 'index']);