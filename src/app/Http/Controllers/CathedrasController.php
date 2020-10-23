<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cathedra;

class CathedrasController extends Controller
{
    public function show(Cathedra $cathedra) {
        return view('stuff', [
            'cathedra' => $cathedra
        ]);
    }
}
