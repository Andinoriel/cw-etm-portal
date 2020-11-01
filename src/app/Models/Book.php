<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'short_description', 
        'description', 
        'teacher_id', 
        'subject_id', 
        'thumbnail', 
        'url_download',
        'created_at', 
        'updated_at'
    ];

    public function teacher()
    {
        return $this->belongsTo('App\Models\Teacher');
    }

    public function subject()
    {
        return $this->belongsTo('App\Models\Subject');
    }
}
