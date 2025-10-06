<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    protected $fillable = [
        'school_day_id',
        'schedule_id',
        'teacher_id',
        'student_id',
        'grade',
        'comment',
    ];
}
