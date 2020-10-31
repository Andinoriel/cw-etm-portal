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
                'cathedras' => \App\Models\Cathedra::get()
            ]);
        }
        if (Auth::user()->hasRole('user-default')) {
            return view('user.default', [
                'student' => \App\Models\Student::where('user_id', Auth::user()->id)->first(),
            ]);
        }
        return view('user.default');
    }

    public function uploadPhoto(Request $request)
    {
        if (Auth::user()->hasRole('user-teacher')) {
            $teacher = \App\Models\Teacher::where('user_id', Auth::user()->id)->first();
            
            if (Storage::exists($teacher->thumbnail))
                Storage::delete($teacher->thumbnail);
            
            $teacher->thumbnail = $request->file('photo')->store('avatars');
            $teacher->save();

            return back()->with('success', 'File uploaded successfully!');
        }
    }
}
