<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\LichController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('main',[LichController::class,'index'] );
Route::get('main/create',[LichController::class,'create'] );
Route::get('main/update',[LichController::class,'update'] );
Route::get('main/delete',[LichController::class,'delete'] );
Route::get('main/restore',[LichController::class,'restore'] );
Route::get('main/FOC',[LichController::class,'firstOrCreate'] );
Route::get('main/UOC',[LichController::class,'updateOrCreate'] );


