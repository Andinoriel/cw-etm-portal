<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;

class FacultiesController extends Controller
{
    public function index()
    {       
        return view('public.faculties', [
            'faculties' => Faculty::get()
        ]);
    }

    public function show(Faculty $faculty) {
        return view('public.cathedras', [
            'faculty' => $faculty
        ]);
    }
}
