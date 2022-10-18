<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'grade',
        'student_id',
        'type_grade_id',
        'state'
    ];
}
