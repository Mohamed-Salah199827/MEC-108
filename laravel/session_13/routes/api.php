<?php

use App\Http\Controllers\AboutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::post('/test',[AboutController::class,'index']);
Route::post('/getUser',[AboutController::class,'getUser']);
