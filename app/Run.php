<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Run extends Model
{
    protected $table = "run";

    protected $fillable = [
        'Run_ID', 'Setup_ID', 'Run_Label', 'Session_ID', 'Driver_ID'
    ];
}
