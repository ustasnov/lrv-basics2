<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/groups', [\App\Http\Controllers\GroupController::class, 'index']);
Route::get('/groups/create', [\App\Http\Controllers\GroupController::class, 'create']);
Route::post('/groups', [\App\Http\Controllers\GroupController::class, 'store']);
Route::get('/groups/{group}', [\App\Http\Controllers\GroupController::class, 'show']);
Route::get('/groups/{group}/students/create', [\App\Http\Controllers\StudentController::class, 'create']);
Route::post('/groups/{group}/students', [\App\Http\Controllers\StudentController::class, 'store']);
Route::get('/groups/{group}/students/{student}', [\App\Http\Controllers\StudentController::class, 'show']);
