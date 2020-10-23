<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\CathedrasController;

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

Route::get('faculties', [FacultiesController::class, 'index']);
Route::get('faculties/faculty-{faculty}', [FacultiesController::class, 'show']);
Route::get('faculties/faculty-{faculty}/cathedra-{cathedra}', [CathedrasController::class, 'show']);
