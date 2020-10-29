<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\CathedrasController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\SubjectsController;

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

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('', [AdminPanelController::class, 'index'])->name('admin');

    // FACULTY CONTROL
    Route::get('control/faculty', [AdminPanelController::class, 'controlFaculty'])->name('control-faculty');
    Route::get('control/faculty/create', [AdminPanelController::class, 'createFaculty']);
    Route::get('control/faculty/update-{id}', [AdminPanelController::class, 'updateFaculty']);

    Route::post('control/faculty/create', [FacultiesController::class, 'create'])->name('create-faculty');
    Route::post('control/faculty/update-{id}', [FacultiesController::class, 'update'])->name('update-faculty');
    Route::delete('control/faculty/delete-{id}', [FacultiesController::class, 'delete'])->name('delete-faculty');

    // CATHEDRA CONTROL
    Route::get('control/cathedra', [AdminPanelController::class, 'controlCathedra'])->name('control-cathedra');
    Route::get('control/cathedra/create', [AdminPanelController::class, 'createCathedra']);
    Route::get('control/cathedra/update-{id}', [AdminPanelController::class, 'updateCathedra']);

    Route::post('control/cathedra/create', [CathedrasController::class, 'create'])->name('create-cathedra');
    Route::post('control/cathedra/update-{id}', [CathedrasController::class, 'update'])->name('update-cathedra');
    Route::delete('control/cathedra/delete-{id}', [CathedrasController::class, 'delete'])->name('delete-cathedra');

    // SUBJECT CONTROL
    Route::get('control/subject', [AdminPanelController::class, 'controlSubject'])->name('control-subject');
    Route::get('control/subject/create', [AdminPanelController::class, 'createSubject']);
    Route::get('control/subject/update-{id}', [AdminPanelController::class, 'updateSubject']);

    Route::post('control/subject/create', [SubjectsController::class, 'create'])->name('create-subject');
    Route::post('control/subject/update-{id}', [SubjectsController::class, 'update'])->name('update-subject');
    Route::delete('control/subject/delete-{id}', [SubjectsController::class, 'delete'])->name('delete-subject');
});


Route::prefix('faculties')->group(function() {
    Route::get('', [FacultiesController::class, 'index']);
    Route::get('faculty-{faculty}', [FacultiesController::class, 'show']);
    Route::get('faculty-{_}/cathedra-{cathedra}', [CathedrasController::class, 'show']);
    Route::get('faculty-{_1}/cathedra-{_2}/teacher-{teacher}', [TeachersController::class, 'show']);
});

Route::prefix('books')->group(function() {
    Route::get('', [BooksController::class, 'index']);
    Route::get('by-teacher-{teacher}', [BooksController::class, 'showByTeacher']);
    Route::get('by-subject-{subject}', [BooksController::class, 'showBySubject']);
    Route::get('book-{book}', [BooksController::class, 'book']);
    Route::get('search', [BooksController::class, 'search']);
});



Route::view('home', 'user.default')->middleware('auth'); // so by so now
