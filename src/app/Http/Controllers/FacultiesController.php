<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultiesController extends Controller
{
    public function index()
    {       
        return view('faculties', [
            'faculties' => Faculty::get()
        ]);
    }

    public function show(Faculty $faculty) {
        return view('cathedras', [
            'faculty' => $faculty
        ]);
    }
}
