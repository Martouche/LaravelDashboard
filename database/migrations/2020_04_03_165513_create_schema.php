<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchema extends Migration {

    public function up()
    {
        $file = file_get_contents(app_path().'/Venturi.sql', true);

        DB::unprepared($file);
    }

    public function down()
    {
    }

}
