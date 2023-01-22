<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signin', [RegisterController::class, 'index']);
Route::post('/signin', [RegisterController::class, 'index']);