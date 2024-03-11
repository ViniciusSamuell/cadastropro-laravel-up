<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/',[IndexController::class,'index']);
Route::get('/cadastro',[IndexController::class,'cadastro']);
Route::get('/cadastro_colaborador',[IndexController::class,'cadastro_colaborador']);


