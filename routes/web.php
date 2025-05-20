<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/notes', function () {
    return 'Hello World';});

Route::get('/notes', [NoteController::class, 'index']);
Route::post('/notes', [NoteController::class, 'store']);
Route::get('/notes/create', [NoteController::class, 'create']);

Route::get('/show/{id}', [NoteController::class, 'show']);


