<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Laps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laps', function (Blueprint $table) {
            $table->id('id');
            $table->integer('Session_ID');
            $table->integer('Driver_ID');
            $table->integer('Stats_ID');
            $table->integer('Radio_ID');
            $table->text('S1Time');
            $table->text('S2Time');
            $table->text('S3Time');
            $table->text('Laptime');
            $table->text('BestS1Time');
            $table->text('BestS2Time');
            $table->text('BestS3Time');
            $table->text('BestLaptime');
            $table->text('GapPrev');
            $table->text('GapNext');
            $table->text('GapFirst');
            $table->integer('GPS_ID');
            $table->integer('Flag_ID');
            $table->integer('SOC_TV');
            $table->integer('LapNumber');
            $table->text('LapTime_T');
            $table->text('S1_T1');
            $table->text('S2_T');
            $table->text('S3_T');
            $table->integer('Team_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
