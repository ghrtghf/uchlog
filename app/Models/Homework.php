<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homework extends Model
{
    protected $fillable = [
        'school_day_id',
        'schedule_id',
        'teacher_id',
        'title',
        'description',
        'due_date',
    ];
}
