<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    
    protected $fillable = ['first_name', 'last_name', 'mid_name', 'group', 'card_code', 'registered_on'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
