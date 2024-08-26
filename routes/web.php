<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/group', [\App\Http\Controllers\GroupController::class, 'index']);
