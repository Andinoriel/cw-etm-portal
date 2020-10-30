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

    #region Views

    public function manageFaculties()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.faculties.default', [
                'faculties' => \App\Models\Faculty::paginate(10),
            ]);
        } else {
            return abort(404);
        }
    }
    public function createFaculty()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.faculties.create');
        } else {
            return abort(404);
        }
    }
    public function updateFaculty($id)
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.faculties.update', [
                'faculty' => \App\Models\Faculty::find($id)
            ]);
        } else {
            return abort(404);
        }
    }
    public function manageCathedras()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.cathedras.default', [
                'cathedras' => \App\Models\Cathedra::paginate(10),
            ]);
        } else {
            return abort(404);
        }
    }
    public function createCathedra()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.cathedras.create', [
                'faculties' => \App\Models\Faculty::get()
            ]);
        } else {
            return abort(404);
        }
    }
    public function updateCathedra($id)
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.cathedras.update', [
                'cathedra' => \App\Models\Cathedra::find($id),
                'faculties' => \App\Models\Faculty::get()
            ]);
        } else {
            return abort(404);
        }
    }

    public function manageTeachers()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.teachers.default', [
                'teachers' => \App\Models\Teacher::paginate(10),
            ]);
        } else {
            return abort(404);
        }
    }
    public function generateInvitation()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.teachers.generate-invitation');
        } else {
            return abort(404);
        }
    }
    public function updateTeacher($id)
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.teachers.update', [
                'teacher' => \App\Models\Teacher::find($id),
                'cathedras' => \App\Models\Cathedra::get()
            ]);
        } else {
            return abort(404);
        }
    }

    public function manageSubjects()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.subjects.default', [
                'subjects' => \App\Models\Subject::paginate(10),
            ]);
        } else {
            return abort(404);
        }
    }
    public function createSubject()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.subjects.create');
        } else {
            return abort(404);
        }
    }
    public function updateSubject($id)
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.manage.subjects.update', [
                'subject' => \App\Models\Subject::find($id)
            ]);
        } else {
            return abort(404);
        }
    }

    #endregion

    #region Search

    public function searchFaculty(Request $request)
    {
        return view('admin.manage.faculties.default', [
            'faculties' => \App\Models\Faculty::where('name', 'like', '%' . $request->search . '%')->paginate(10),
            'query' => $request->search
        ]);
    }
    public function searchCathedra(Request $request)
    {
        return view('admin.manage.cathedras.default', [
            'cathedras' => \App\Models\Cathedra::where('name', 'like', '%' . $request->search . '%')->paginate(10),
            'query' => $request->search
        ]);
    }
    public function searchTeacher(Request $request)
    {
        return view('admin.manage.teachers.default', [
            'teachers' => \App\Models\Teacher::where('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('last_name', 'like', '%' . $request->search . '%')
                ->orWhere('mid_name', 'like', '%' . $request->search . '%')
                ->paginate(10),
            'query' => $request->search
        ]);
    }
    public function searchSubject(Request $request)
    {
        return view('admin.manage.subjects.default', [
            'subjects' => \App\Models\Subject::where('name', 'like', '%' . $request->search . '%')->paginate(10),
            'query' => $request->search
        ]);
    }

    #endregion
}
