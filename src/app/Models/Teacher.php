<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function cathedra() {
        return $this->belongsTo('App\Models\Cathedra');
    }

    public function books() {
        return $this->hasMany('App\Models\Book');
    }
}
