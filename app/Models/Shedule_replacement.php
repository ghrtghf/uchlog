<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shedule_replacement extends Model
{
    protected $fillable = [
        'schedule_id',
        'date',
        'replacement_teacher_id',
        'replacement_lesson_id',
        'note',
    ];
}
