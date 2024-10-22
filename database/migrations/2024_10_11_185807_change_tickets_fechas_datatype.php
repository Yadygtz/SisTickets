<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ChangeTicketsFechasDatatype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            //
            DB::statement("ALTER TABLE tickets MODIFY fecha_registro date, MODIFY fecha_aprox date, MODIFY fecha_termino date");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tickets', function (Blueprint $table) {
            //
            DB::statement("ALTER TABLE tickets MODIFY fecha_registro timestamp, MODIFY fecha_aprox timestamp, MODIFY fecha_termino timestamp");
        });
    }
}
