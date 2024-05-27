<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupSchedule extends Model
{
    use HasFactory;

    protected $table = 'group_schedules';

    protected $guarded = [];
}
