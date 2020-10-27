<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cathedra extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['name', 'thumbnail'];

    public function faculty() {
        return $this->belongsTo('App\Models\Faculty');
    }

    public function teachers() {
        return $this->hasMany('App\Models\Teacher');
    }
}
