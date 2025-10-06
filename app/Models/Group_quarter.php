<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group_quarter extends Model
{
    protected $fillable = [
        'group_id',
        'quarter_id',
        'default_timetable_id',
    ];
}
