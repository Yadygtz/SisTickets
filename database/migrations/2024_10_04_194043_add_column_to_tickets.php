<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToTickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->integer('id_personal');
            $table->integer('id_servicio');
            $table->integer('id_area');
            $table->timestamp('fecha_registro');
            $table->timestamp('fecha_aprox');
            $table->timestamp('fecha_termino');
            $table->string('estatus');
            $table->string('prioridad');

            //
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
            $table->dropColumn(array_merge([
                'id_personal',
                'id_servicio',
                'id_area',
                'fecha_registro',
                'fecha_aprox',
                'fecha_termino',
                'estatus',
                'prioridad'
            ]));

        });
    }
}
