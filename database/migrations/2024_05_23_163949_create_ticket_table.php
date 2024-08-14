<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket', function (Blueprint $table) {
            $table->id('id_ticket');
            $table->unsignedBigInteger('id_servicio');
            $table->unsignedBigInteger('id_area');
            $table->string('id_personal', 30);
            $table->string('id_usuario', 30);
            $table->string('descripcion', 500);
            $table->dateTime('fecha_registro');
            $table->dateTime('fecha_aprox')->nullable();
            $table->dateTime('fecha_termino')->nullable();
            $table->string('estatus', 30);
            $table->integer('prioridad');
            $table->string('creado_por', 30)->nullable();
            $table->dateTime('ultima_modificacion')->nullable();
            $table->string('ultima_mod_por', 30)->nullable();

            // Foreign keys
            $table->foreign('id_area')->references('id_area')->on('areas');
            $table->foreign('id_servicio')->references('id_servicio')->on('servicio');
            // Add other foreign key constraints if necessary

            $table->index('id_area');
            $table->index('id_servicio');
            // Add other indexes if necessary

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket');
    }
}
