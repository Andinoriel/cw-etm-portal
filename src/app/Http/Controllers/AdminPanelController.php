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
        return view('admin.manage.faculties.default', [
            'faculties' => \App\Models\Faculty::paginate(10),
        ]);
    }
    public function createFaculty()
    {
        return view('admin.manage.faculties.create');
    }
    public function updateFaculty($id)
    {
        return view('admin.manage.faculties.update', [
            'faculty' => \App\Models\Faculty::find($id)
        ]);
    }
    
    public function manageCathedras()
    {
        return view('admin.manage.cathedras.default', [
            'cathedras' => \App\Models\Cathedra::paginate(10),
        ]);
    }
    public function createCathedra()
    {
        return view('admin.manage.cathedras.create', [
            'faculties' => \App\Models\Faculty::get()
        ]);
    }
    public function updateCathedra($id)
    {
        return view('admin.manage.cathedras.update', [
            'cathedra' => \App\Models\Cathedra::find($id),
            'faculties' => \App\Models\Faculty::get()
        ]);
    }

    public function manageTeachers()
    {
        return view('admin.manage.teachers.default', [
            'teachers' => \App\Models\Teacher::paginate(10),
        ]);
    }
    public function generateInvitation()
    {
        return view('admin.manage.teachers.generate-invitation');
    }
    public function updateTeacher($id)
    {
        return view('admin.manage.teachers.update', [
            'teacher' => \App\Models\Teacher::find($id),
            'cathedras' => \App\Models\Cathedra::get()
        ]);
    }

    public function manageSubjects()
    {
        return view('admin.manage.subjects.default', [
            'subjects' => \App\Models\Subject::paginate(10),
        ]);
    }
    public function createSubject()
    {
        return view('admin.manage.subjects.create');
    }
    public function updateSubject($id)
    {
        return view('admin.manage.subjects.update', [
            'subject' => \App\Models\Subject::find($id)
        ]);
    }

    public function manageStudents()
    {
        return view('admin.manage.students.default', [
            'students' => \App\Models\Student::paginate(10),
        ]);
    }
    public function createStudent()
    {
        return view('admin.manage.students.create');
    }
    public function updateStudent($id)
    {
        return view('admin.manage.students.update', [
            'student' => \App\Models\Student::find($id)
        ]);
    }

    public function manageUsers()
    {
        return view('admin.manage.users.default', [
            'users' => \App\Models\User::paginate(10),
        ]);
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
    public function searchStudent(Request $request)
    {
        return view('admin.manage.students.default', [
            'students' => \App\Models\Student::where('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('first_name', 'like', '%' . $request->search . '%')
                ->orWhere('last_name', 'like', '%' . $request->search . '%')
                ->orWhere('mid_name', 'like', '%' . $request->search . '%')
                ->orWhere('group', $request->search)
                ->orWhere('card_code', $request->search)
                ->paginate(10),
            'query' => $request->search
        ]);
    }
    public function searchUsers(Request $request)
    {
        return view('admin.manage.users.default', [
            'users' => \App\Models\User::where('email', 'like', '%' . $request->search . '%')
                ->orWhere('id', $request->search)
                ->paginate(10),
            'query' => $request->search
        ]);
    }

    #endregion
}
