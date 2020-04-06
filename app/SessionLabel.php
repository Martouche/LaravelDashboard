<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SessionLabel extends Model
{
    protected $table = "sessionlabel";

    protected $fillable = [
        'Session_ID', 'Name', 'Type',
    ];
}
