<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\CathedrasController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\StudentsController;

use App\Http\Controllers\UserProfileController;

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

Route::middleware(['auth', 'role:super-admin'])->prefix('admin')->group(function () {
    Route::get('', [AdminPanelController::class, 'index'])->name('admin');

    // Faculties Control
    Route::prefix('manage/faculties')->group(function () {
        Route::get('', [AdminPanelController::class, 'manageFaculties'])->name('manage-faculties');
        Route::get('create', [AdminPanelController::class, 'createFaculty']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateFaculty']);

        Route::post('create', [FacultiesController::class, 'create'])->name('create-faculty');
        Route::post('update-{id}', [FacultiesController::class, 'update'])->name('update-faculty');
        Route::delete('delete-{id}', [FacultiesController::class, 'delete'])->name('delete-faculty');

        Route::get('search', [AdminPanelController::class, 'searchFaculty'])->name('search-faculty');
    });
    // Cathedras Control
    Route::prefix('manage/cathedras')->group(function () {
        Route::get('', [AdminPanelController::class, 'manageCathedras'])->name('manage-cathedras');
        Route::get('create', [AdminPanelController::class, 'createCathedra']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateCathedra']);

        Route::post('create', [CathedrasController::class, 'create'])->name('create-cathedra');
        Route::post('update-{id}', [CathedrasController::class, 'update'])->name('update-cathedra');
        Route::delete('delete-{id}', [CathedrasController::class, 'delete'])->name('delete-cathedra');

        Route::get('search', [AdminPanelController::class, 'searchCathedra'])->name('search-cathedra');
    });
    // Teachers Control
    Route::prefix('manage/teachers')->group(function () {
        Route::get('', [AdminPanelController::class, 'manageTeachers'])->name('manage-teachers');
        Route::get('generate-invitation', [AdminPanelController::class, 'generateInvitation']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateTeacher']);

        Route::post('generate-invitation', [TeachersController::class, 'generateInvitation'])->name('generate-invitation');
        Route::post('update-{id}', [TeachersController::class, 'update'])->name('update-teacher');

        Route::get('search', [AdminPanelController::class, 'searchTeacher'])->name('search-teacher');
    });
    // Subjects Control
    Route::prefix('manage/subjects')->group(function () {
        Route::get('', [AdminPanelController::class, 'manageSubjects'])->name('manage-subjects');
        Route::get('create', [AdminPanelController::class, 'createSubject']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateSubject']);

        Route::post('create', [SubjectsController::class, 'create'])->name('create-subject');
        Route::post('update-{id}', [SubjectsController::class, 'update'])->name('update-subject');
        Route::delete('delete-{id}', [SubjectsController::class, 'delete'])->name('delete-subject');

        Route::get('search', [AdminPanelController::class, 'searchSubject'])->name('search-subject');
    });
    // Students Control
    Route::prefix('manage/students')->group(function () {
        Route::get('', [AdminPanelController::class, 'manageStudents'])->name('manage-students');
        Route::get('create', [AdminPanelController::class, 'createStudent']);
        Route::get('update-{id}', [AdminPanelController::class, 'updateStudent']);

        Route::post('create', [StudentsController::class, 'create'])->name('create-student');
        Route::post('update-{id}', [StudentsController::class, 'update'])->name('update-student');
        Route::delete('delete-{id}', [StudentsController::class, 'delete'])->name('delete-student');

        Route::get('search', [AdminPanelController::class, 'searchStudent'])->name('search-student');
    });
    // Users Control
    Route::prefix('manage/users')->group(function () {
        Route::get('', [AdminPanelController::class, 'manageUsers'])->name('manage-users');
        Route::get('search', [AdminPanelController::class, 'searchUsers'])->name('search-user');
    });
});

/*
 * Profile Page Routing
 */
Route::middleware(['auth', 'verified'])->prefix('profile')->group(function () {
    Route::get('', [UserProfileController::class, 'index'])->name('profile');

    Route::post('update-{id}', [TeachersController::class, 'update'])
        ->name('update-profile')->middleware('role:user-teacher');
    Route::post('upload-photo', [UserProfileController::class, 'uploadPhoto'])
        ->middleware('role:user-teacher')->name('upload-photo');

    Route::middleware('can:upload publication')->prefix('files')->group(function () {
        Route::get('', [UserProfileController::class, 'manageFiles'])->name('manage-files');
        Route::get('create', [UserProfileController::class, 'createFile']);
        Route::get('update-{id}', [UserProfileController::class, 'updateFile']);

        Route::post('create', [BooksController::class, 'create'])->name('create-book');
        Route::post('update-{id}', [BooksController::class, 'update'])->name('update-book');
        Route::delete('delete-{id}', [BooksController::class, 'delete'])->name('delete-book');

        Route::get('search', [UserProfileController::class, 'searchFile'])->name('search-file');
    });
});

/*
 * Public Pages Routing
 */
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

/*
 * Main Page
 */
Route::get('/', function () { return view('index'); });