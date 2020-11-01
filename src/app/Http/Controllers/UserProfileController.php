<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('user-teacher')) {
            return view('user.default', [
                'teacher' => \App\Models\Teacher::where('user_id', Auth::user()->id)->first(),
                'cathedras' => \App\Models\Cathedra::get(),
                'subjects' => \App\Models\Subject::get()
            ]);
        }
        if (Auth::user()->hasRole('user-default')) {
            return view('user.default', [
                'student' => \App\Models\Student::where('user_id', Auth::user()->id)->first(),
            ]);
        }
        if (Auth::user()->hasRole('super-admin')) {
            return view('admin.default');
        }        
    }

    public function uploadPhoto(Request $request)
    {
        if ($request->hasFile('photo')) {
            $teacher = \App\Models\Teacher::where('user_id', Auth::user()->id)->first();

            if (Storage::exists($teacher->image))
                Storage::delete($teacher->image);

            $teacher->image = $request->file('photo')->store('avatars');
            $teacher->save();

            return back()->with('success', 'Photo uploaded successfully!');
        } else {
            return back()->withErrors('No photo selected');
        }
    }


    public function manageFiles()
    {
        return view('user.profile.files.default', [
            'books' => \App\Models\Book::where(
                'teacher_id',
                \App\Models\Teacher::where('user_id', Auth::user()->id)->first()->id
            )->paginate(10),
        ]);
    }
    public function createFile()
    {
        return view('user.profile.files.create', [
            'subjects' => \App\Models\Subject::get()
        ]);
    }
    public function updateFile($id)
    {
        return view('user.profile.files.update', [
            'book' => \App\Models\Book::find($id),
            'subjects' => \App\Models\Subject::get()
        ]);
    }

    public function searchFile(Request $request)
    {
        return view('user.profile.files.default', [
            'books' => \App\Models\Book::where('title', 'like', '%' . $request->search . '%')
                ->orWhere('short_description', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%')
                ->paginate(10),
            'query' => $request->search
        ]);
    }
}
