<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group_lesson extends Model
{
    protected $fillable = [
        'group_id',
        'lesson_id',
        'teacher_id',
    ];
}
