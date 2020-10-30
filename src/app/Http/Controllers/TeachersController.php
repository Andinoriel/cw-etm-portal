<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Cathedra;
use App\Models\Teacher;
use App\Models\Invitation;

class TeachersController extends Controller
{
    public function show(Faculty $_1, Cathedra $_2, Teacher $teacher) {
        return view('public.stuff-single', [
            'teacher' => $teacher
        ]);
    }

    // public function create(Request $request)
    // {
    //     Cathedra::insert([
    //         'name' => $request->name,
    //         'thumbnail' => $request->thumbnail,
    //         'faculty_id' => $request->faculty_id
    //     ]);
    //     return redirect('/admin/control/cathedras')->with('success', 'Cathedra created successfully.');
    // }
    public function generateInvitation(Request $request)
    {
        Invitation::create([
            'invite_key' => $request->invitation
        ]);
        return redirect('/admin/manage/teachers')->with('success', 'Invitation created successfully');
    }
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mid_name' => $request->mid_name,
            'degree' => $request->degree,
        ]);
        $teacher->cathedra_id = Cathedra::find($request->cathedra_id)->id;
        $teacher->save();

        return redirect('/admin/manage/teachers')->with('success', 'Teacher updated successfully');
    }
    // public function delete($id)
    // {
    //     Cathedra::find($id)->delete();
    //     return redirect('/admin/control/cathedras')->with('success', 'Cathedra deleted successfully');
    // }
}
