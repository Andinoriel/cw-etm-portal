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

Route::middleware('auth')->group(function () {
    Route::get('admin', [AdminPanelController::class, 'index'])->name('admin');

    // FACULTY CONTROL
    Route::get('admin/control/faculty', [AdminPanelController::class, 'controlFaculty'])->name('control-faculty');
    Route::get('admin/control/faculty/create', [AdminPanelController::class, 'createFaculty']);
    Route::get('admin/control/faculty/update-{id}', [AdminPanelController::class, 'updateFaculty']);

    Route::post('admin/control/faculty/create', [FacultiesController::class, 'create'])->name('create-faculty');
    Route::post('admin/control/faculty/update-{id}', [FacultiesController::class, 'update'])->name('update-faculty');
    Route::delete('admin/control/faculty/delete-{id}', [FacultiesController::class, 'delete'])->name('delete-faculty');

    // ...

    // SUBJECT CONTROL
    Route::get('admin/control/subject', [AdminPanelController::class, 'controlSubject'])->name('control-subject');
    Route::get('admin/control/subject/create', [AdminPanelController::class, 'createSubject']);
    Route::get('admin/control/subject/update-{id}', [AdminPanelController::class, 'updateSubject']);

    Route::post('admin/control/subject/create', [SubjectsController::class, 'create'])->name('create-subject');
    Route::post('admin/control/subject/update-{id}', [SubjectsController::class, 'update'])->name('update-subject');
    Route::delete('admin/control/subject/delete-{id}', [SubjectsController::class, 'delete'])->name('delete-subject');
});


Route::get('faculties', [FacultiesController::class, 'index']);
Route::get('faculties/faculty-{faculty}', [FacultiesController::class, 'show']);
Route::get('faculties/faculty-{_}/cathedra-{cathedra}', [CathedrasController::class, 'show']);
Route::get('faculties/faculty-{_1}/cathedra-{_2}/teacher-{teacher}', [TeachersController::class, 'show']);

Route::get('books', [BooksController::class, 'index']);
Route::get('books/by-teacher-{teacher}', [BooksController::class, 'showByTeacher']);
Route::get('books/by-subject-{subject}', [BooksController::class, 'showBySubject']);
Route::get('books/book-{book}', [BooksController::class, 'book']);
Route::get('books/search', [BooksController::class, 'search']);


// Route::view('home', 'user.default')->middleware('auth'); // so by so now
