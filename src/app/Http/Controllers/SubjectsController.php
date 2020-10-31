<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectsController extends Controller
{
    public function create(Request $request)
    {
        Subject::insert([
            'name' => $request->name,
        ]);

        return redirect($request->redirect)->with('success', 'Subject created successfully.');
    }
    public function update(Request $request, $id)
    {
        Subject::find($id)->update([
            'name' => $request->name,
        ]);

        return redirect($request->redirect)->with('success', 'Subject updated successfully');
    }
    public function delete($id)
    {
        Subject::find($id)->delete();
        return back()->with('success', 'Subject deleted successfully');
    }
}
