<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Cathedra;

class CathedrasController extends Controller
{
    public function show(Faculty $_, Cathedra $cathedra) {
        return view('public.stuff', [
            'cathedra' => $cathedra
        ]);
    }

    public function create(Request $request)
    {
        Cathedra::insert([
            'name' => $request->name,
            'thumbnail' => $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('thumbnails') : '',
            'faculty_id' => $request->faculty_id
        ]);

        return redirect($request->redirect)->with('success', 'Cathedra created successfully.');
    }
    public function update(Request $request, $id)
    {
        $cathedra = Cathedra::find($id);
        $cathedra->update([
            'name' => $request->name,
            'thumbnail' => $request->hasFile('thumbnail') ? $request->file('thumbnail')->store('thumbnails') : '',
        ]);
        $cathedra->faculty_id = Faculty::find($request->faculty_id)->id;
        $cathedra->save();
        
        return redirect($request->redirect)->with('success', 'Cathedra updated successfully');
    }
    public function delete($id)
    {
        Cathedra::find($id)->delete();
        return back()->with('success', 'Cathedra deleted successfully');
    }
}
