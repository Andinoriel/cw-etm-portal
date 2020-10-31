<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function create(Request $request)
    {
        Student::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mid_name' => $request->mid_name,
            'group' => $request->group,
            'card_code' => $request->card_code
        ]);

        return redirect($request->redirect)->with('success', 'Student created successfully.');
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mid_name' => $request->mid_name,
            'group' => $request->group,
            'card_code' => $request->card_code
        ]);        
        $student->save();

        return redirect($request->redirect)->with('success', 'Student updated successfully');
    }
    public function delete($id)
    {
        Student::find($id)->delete();
        return back()->with('success', 'Student deleted successfully');
    }
}
