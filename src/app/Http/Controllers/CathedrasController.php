<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Cathedra;

class CathedrasController extends Controller
{
    public function show(Faculty $faculty, Cathedra $cathedra) {
        return view('stuff', [
            'cathedra' => $cathedra
        ]);
    }
}
