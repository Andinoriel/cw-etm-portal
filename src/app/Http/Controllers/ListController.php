<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Book;

class ListController extends Controller
{
    public function index()
    {       
        return view('list', [
            'books' => Book::with('Teacher')->paginate(6),
        ]);
    }

    public function show(Teacher $teacher) {
        return view('list', [
            'books' => $teacher->books()->with('Teacher')->paginate(6)
        ]);
    }
}
