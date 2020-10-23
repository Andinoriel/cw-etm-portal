<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Cathedra;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function show(Faculty $_1, Cathedra $_2, Teacher $teacher) {
        return view('teacher', [
            'teacher' => $teacher
        ]);
    }
}
