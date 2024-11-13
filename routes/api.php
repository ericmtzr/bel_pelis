<?php

use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('movies',[MovieController::class,'movies']);
Route::get('allmovies',[MovieController::class,'allmovies']);
Route::get('movieid/{id}',[MovieController::class, 'movieid']);

Route::post('postmovie',[MovieController::class, 'postmovie']);

Route::put('updatemovie/{id}',[MovieController::class, 'updatemovie']);

Route::delete('deletemovie/{id}',[MovieController::class, 'deletemovie']);