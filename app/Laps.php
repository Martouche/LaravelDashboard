<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laps extends Model
{
    protected $table = "laps";

    protected $fillable = [
        'Lap_ID', 'Session_ID', 'Driver_ID', 'Stats_ID', 'Radio_ID', 'S1Time', 'S2Time', 'S3Time', 'Laptime', 'BestS1Time', 'BestS2Time', 'BestS3Time', 'BestLaptime', 'GapPrev', 'GapNext', 'GapFirst', 'GPS_ID', 'Flag_ID', 'SOC_TV', 'LapNumber', 'Laptime_T', 'S1_T', 'S2_T', 'S3_T', 'Team_ID', 'Elapsed', 'Speed_Avg', 'Crossing_Line', 'TopSpeed', 'Power', 'Pit_Time', 'Run_ID', 'SOC', 'ELap', 'ERemaining' 
    ];
}
