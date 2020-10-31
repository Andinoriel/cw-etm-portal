<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['first_name', 'last_name', 'mid_name', 'degree', 'about', 'registered_on'];

    public function cathedra()
    {
        return $this->belongsTo('App\Models\Cathedra');
    }

    public function books()
    {
        return $this->hasMany('App\Models\Book');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
