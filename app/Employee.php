<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public $fillabel = [

        'firstname',
        'lastname',
        'role',
        'salary',
        'date_of_employment',
    ];
}
