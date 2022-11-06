<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"]);



//get, post, patch, delete, put, options

//CRUD rute za rad sa filmovima

Route::get("/movies", [\App\Http\Controllers\MoviesController::class, "index"])->name("movies.index");
Route::post("/movies", [\App\Http\Controllers\MoviesController::class, "store"])->name("movies.store");
Route::get("/movies/create", [\App\Http\Controllers\MoviesController::class, "create"]);
Route::get("/movies/{id}", [\App\Http\Controllers\MoviesController::class, "details"]);
//Forma za edit
Route::get("/movies/{id}/edit", [\App\Http\Controllers\MoviesController::class, "edit"]);
Route::put("/movies/{id}", [\App\Http\Controllers\MoviesController::class, "update"]);
Route::delete("/movies/{id}", [\App\Http\Controllers\MoviesController::class, "delete"]);

Route::resource("/roles", \App\Http\Controllers\RolesController::class);
