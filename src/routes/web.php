<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\CathedrasController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\BooksController;

use App\Http\Controllers\AdminPanelController;

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

/*
 * Admin Panel Routing
 */ 
Route::get('admin', [AdminPanelController::class, 'index'])->middleware('auth');
Route::post('admin/control-faculty/create', [AdminPanelController::class, 'createFaculty'])->middleware('auth');
Route::post('admin/control-faculty/update', [AdminPanelController::class, 'updateFaculty'])->middleware('auth');
Route::post('admin/control-faculty/delete', [AdminPanelController::class, 'deleteFaculty'])->middleware('auth');

Route::get('admin/ajax_faculty/{id}', [AdminPanelController::class, 'ajax_faculty'])->middleware('auth');




Route::get('faculties', [FacultiesController::class, 'index']);
Route::get('faculties/faculty-{faculty}', [FacultiesController::class, 'show']);
Route::get('faculties/faculty-{_}/cathedra-{cathedra}', [CathedrasController::class, 'show']);
Route::get('faculties/faculty-{_1}/cathedra-{_2}/teacher-{teacher}', [TeachersController::class, 'show']);

Route::get('books', [BooksController::class, 'index']);
Route::get('books/by-teacher-{teacher}', [BooksController::class, 'showByTeacher']);
Route::get('books/by-subject-{subject}', [BooksController::class, 'showBySubject']);
Route::get('books/book-{book}', [BooksController::class, 'book']);

Route::view('home', 'user.default')->middleware('auth'); // so by so now
