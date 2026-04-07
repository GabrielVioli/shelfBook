<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenrerController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get("book", [BookController::class, 'index']);
Route::post("book", [BookController::class, 'store']);
Route::get("book/{id}", [BookController::class, 'show']);
Route::put("book/{id}", [BookController::class, 'update']);
ROute::delete("book/{id}", [BookController::class, 'destroy']);

Route::get("genre", [GenrerController::class, 'index']);
Route::post("genre", [GenrerController::class, 'store']);
Route::get("genre/{id}", [GenrerController::class, 'show']);
Route::put("genre/{id}", [GenrerController::class, 'update']);
Route::delete("genre/{id}", [GenrerController::class, 'destroy']);

