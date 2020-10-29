<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminPanelController extends Controller
{
    public function index()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.default');
        } else {
            return abort(404);
        }
    }

    public function controlFaculty() 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.faculty.default', [
                'faculties' => \App\Models\Faculty::paginate(10),
            ]);
        } else {
            return abort(404);
        }
    }
    public function createFaculty() 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.faculty.create');
        } else {
            return abort(404);
        }
    }
    public function updateFaculty($id) 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.faculty.update', [
                'faculty' => \App\Models\Faculty::find($id)
            ]);
        } else {
            return abort(404);
        }
    }

    public function controlCathedra() 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.cathedra.default', [
                'cathedras' => \App\Models\Cathedra::paginate(10),
            ]);
        } else {
            return abort(404);
        }
    }
    public function createCathedra() 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.cathedra.create', [
                'faculties' => \App\Models\Faculty::get()
            ]);
        } else {
            return abort(404);
        }
    }
    public function updateCathedra($id) 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.cathedra.update', [
                'cathedra' => \App\Models\Cathedra::find($id),
                'faculties' => \App\Models\Faculty::get()
            ]);
        } else {
            return abort(404);
        }
    }

    public function controlSubject() 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.subject.default', [
                'subjects' => \App\Models\Subject::paginate(10),
            ]);
        } else {
            return abort(404);
        }
    }
    public function createSubject() 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.subject.create');
        } else {
            return abort(404);
        }
    }
    public function updateSubject($id) 
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.control.subject.update', [
                'subject' => \App\Models\Subject::find($id)
            ]);
        } else {
            return abort(404);
        }
    }
}
