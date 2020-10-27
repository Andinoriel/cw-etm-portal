<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'thumbnail'];

    public function cathedras() {
        return $this->hasMany('App\Models\Cathedra');
    }
}
