<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('registro_asignacion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('libro_id')->unsigned();
            $table->datetime("fecha_solicitud");
            $table->datetime("fecha_asignacion");
            $table->datetime("fecha_entrega");
            $table->bigInteger('user_solicitud')->unsigned();
            $table->bigInteger('user_prestamo')->unsigned();
            $table->timestamps();
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete("cascade");
            $table->foreign('user_solicitud')->references('id')->on('users')->onDelete("cascade");
            $table->foreign('user_prestamo')->references('id')->on('users')->onDelete("cascade");
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
};
