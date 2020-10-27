<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    public function index()
    {
        if (Auth::user()->can('administrate')) {
            return view('admin.default', [
                'faculties' => \App\Models\Faculty::get(),
                'cathedras' => \App\Models\Cathedra::get(),
                'subjects' => \App\Models\Subject::get(),
            ]);
        } else {
            return abort(404);
        }
    }

    public function createFaculty(Request $request)
    {
        \App\Models\Faculty::insert([
            'name' => $request->faculty_name_c,
            'thumbnail' => $request->faculty_thumbnail_c
        ]);
        return back();
    }
    public function updateFaculty(Request $request)
    {
        $faculty = \App\Models\Faculty::find($request->input('faculty_dropdown_u'));
        if ($faculty)
            $faculty->update([
                'name' => $request->faculty_name_u,
                'thumbnail' => $request->faculty_thumbnail_u
            ]);
        return back();
    }
    public function ajax_faculty($id) {
        return response()->json(\App\Models\Faculty::find($id));
    }
    public function deleteFaculty(Request $request)
    {
        $faculty = \App\Models\Faculty::find($request->input('faculty_dropdown_d'));
        if ($faculty)
            $faculty->delete();
        return back();
    }
}
