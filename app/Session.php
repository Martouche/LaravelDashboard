<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $table = "session";

    protected $fillable = [
        'Session_ID', 'SessionLabel_ID', 'Event_ID',
    ];
}