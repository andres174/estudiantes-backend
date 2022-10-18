<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeGrade extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'type_grade',
        'state'
    ];
}
