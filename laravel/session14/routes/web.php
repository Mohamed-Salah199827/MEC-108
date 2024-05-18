<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class, "index"])->name("student.index");
Route::delete('/delete/{id}', [StudentController::class, "delete"])
->name("student.delete");






Route::put('/update/{id}', [StudentController::class, "update"])->name("student.update");
Route::put('/edit/{id}', [StudentController::class, "edit"])->name("student.edit");

Route::get('/create', [StudentController::class, "createPage"])->name("student.create");
Route::post('/create', [StudentController::class, "Create"])->name("student.add");