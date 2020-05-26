<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    protected $table = "drivers";

    protected $fillable = [
        'Driver_ID', 'Number', 'Name', 'Surname', 'Nationality', 'Shortname', 'Team_ID'
    ];
}
