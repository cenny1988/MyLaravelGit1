<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'priority',
        'description',
        'team',
        'start_task',
        'end_task'
    ];
}
