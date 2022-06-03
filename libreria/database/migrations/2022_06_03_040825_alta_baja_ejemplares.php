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
        Schema::create('alta_baja_ejemplares', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('libro_id')->unsigned();
            $table->integer('cantidad_ejemplares');
            $table->enum("tipo", ["ingreso", "egreso"]);
            $table->enum("motivo", ["migracion", "daño","donacion","compra"]);
            $table->timestamps();
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete("cascade");
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
