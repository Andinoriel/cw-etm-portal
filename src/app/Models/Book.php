<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'short_description', 'description', 'thumbnail'];

    public function teacher() {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function subject() {
        return $this->belongsTo('App\Models\Subject');
    }
}
