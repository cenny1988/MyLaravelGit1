<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [

        'firstname',
        'lastname',
        'role',
        'salary',
        'date_of_employment',
    ];
}
