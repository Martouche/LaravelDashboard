<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "event";

    protected $fillable = [
        'Event_ID', 'Event', 'Season_ID', 'Track_ID',
    ];
}
