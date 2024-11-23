<?php

use App\Http\Controllers\DBController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('usr','welcome');
Route::get('Op',[DBController::class,'qry']);
Route::post('Op',[DBController::class,'qry']);