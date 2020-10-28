<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use Illuminate\Support\Facades\Auth;

class FacultiesController extends Controller
{
    public function index()
    {
        return view('public.faculties', [
            'faculties' => Faculty::get()
        ]);
    }

    public function show(Faculty $faculty)
    {
        return view('public.cathedras', [
            'faculty' => $faculty
        ]);
    }

    public function create(Request $request)
    {
        Faculty::insert([
            'name' => $request->name,
            'thumbnail' => $request->thumbnail
        ]);

        return redirect('/admin/control/faculty')->with('success', 'Faculty created successfully.');
    }
    public function update(Request $request, $id)
    {
        Faculty::find($id)->update([
            'name' => $request->name,
            'thumbnail' => $request->thumbnail
        ]);

        return redirect('/admin/control/faculty')->with('success', 'Faculty updated successfully');
    }
    public function delete($id)
    {
        Faculty::find($id)->delete();
        return redirect('/admin/control/faculty')->with('success', 'Faculty deleted successfully');
    }
}
