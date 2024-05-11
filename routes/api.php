<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\MotoController;

Route::get('/', function(){return response()->json(['Sucesso!!'=>true]);});
Route::get('/motos',[MotoController::class,'index']);
Route::post('/motos',[MotoController::class,'store']);

Route::delete('/motos/{id}',[MotoController::class,'destroy']);
Route::put('/motos/{id}',[MotoController::class,'update']);
Route::get('/motos/{id}',[MotoController::class,'show']);

