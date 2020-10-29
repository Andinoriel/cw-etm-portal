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
    Route::prefix('control/faculties')->group(function () {
        Route::get('', [AdminPanelController::class, 'controlFaculties'])->name('control-faculties');
        Route::get('create', [AdminPanelController::class, 'createFaculty']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateFaculty']);

        Route::post('create', [FacultiesController::class, 'create'])->name('create-faculty');
        Route::post('update-{id}', [FacultiesController::class, 'update'])->name('update-faculty');
        Route::delete('delete-{id}', [FacultiesController::class, 'delete'])->name('delete-faculty');

        Route::get('search', [AdminPanelController::class, 'searchFaculty'])->name('search-faculty');
    });
    // CATHEDRA CONTROL
    Route::prefix('control/cathedras')->group(function () {
        Route::get('', [AdminPanelController::class, 'controlCathedras'])->name('control-cathedras');
        Route::get('create', [AdminPanelController::class, 'createCathedra']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateCathedra']);

        Route::post('create', [CathedrasController::class, 'create'])->name('create-cathedra');
        Route::post('update-{id}', [CathedrasController::class, 'update'])->name('update-cathedra');
        Route::delete('delete-{id}', [CathedrasController::class, 'delete'])->name('delete-cathedra');

        Route::get('search', [AdminPanelController::class, 'searchCathedra'])->name('search-cathedra');
    });
    // TEACHER CONTROL
    Route::prefix('control/teachers')->group(function () {
        Route::get('', [AdminPanelController::class, 'controlTeachers'])->name('control-teachers');
        Route::get('update-{id}', [AdminPanelController::class, 'updateTeacher']);

        Route::post('update-{id}', [TeachersController::class, 'update'])->name('update-teacher');

        Route::get('search', [AdminPanelController::class, 'searchTeacher'])->name('search-teacher');
    });
    // SUBJECT CONTROL
    Route::prefix('control/subjects')->group(function () {
        Route::get('', [AdminPanelController::class, 'controlSubjects'])->name('control-subjects');
        Route::get('create', [AdminPanelController::class, 'createSubject']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateSubject']);

        Route::post('create', [SubjectsController::class, 'create'])->name('create-subject');
        Route::post('update-{id}', [SubjectsController::class, 'update'])->name('update-subject');
        Route::delete('delete-{id}', [SubjectsController::class, 'delete'])->name('delete-subject');

        Route::get('search', [AdminPanelController::class, 'searchSubject'])->name('search-subject');
    });
});


Route::prefix('faculties')->group(function () {
    Route::get('', [FacultiesController::class, 'index']);
    Route::get('faculty-{faculty}', [FacultiesController::class, 'show']);
    Route::get('faculty-{_}/cathedra-{cathedra}', [CathedrasController::class, 'show']);
    Route::get('faculty-{_1}/cathedra-{_2}/teacher-{teacher}', [TeachersController::class, 'show']);
});

Route::prefix('books')->group(function () {
    Route::get('', [BooksController::class, 'index']);
    Route::get('by-teacher-{teacher}', [BooksController::class, 'showByTeacher']);
    Route::get('by-subject-{subject}', [BooksController::class, 'showBySubject']);
    Route::get('book-{book}', [BooksController::class, 'book']);
    Route::get('search', [BooksController::class, 'search']);
});



Route::view('home', 'user.default')->middleware('auth'); // so by so now
