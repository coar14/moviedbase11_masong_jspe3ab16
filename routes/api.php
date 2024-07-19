<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');


Route::get('/movies', [MovieController::class, 'index']);
Route::get('/movies/{id}', [MovieController::class, 'show']);


Route::get('/directors/{id}', [DirectorController::class, 'show']);


Route::get('/actors/{id}', [ActorController::class, 'show']);


Route::get('/movies-with-genres', [MovieController::class, 'getMoviesWithGenres']);
Route::get('/movies-with-ratings', [MovieController::class, 'getMoviesWithRatings']);
