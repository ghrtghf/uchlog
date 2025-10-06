<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'group_lesson_id',
        'quarter_id',
        'week_day',
        'lesson_number',
    ];
}
