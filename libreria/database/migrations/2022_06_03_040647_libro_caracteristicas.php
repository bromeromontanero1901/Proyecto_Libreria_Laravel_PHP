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
        Schema::create('libro_caracteristicas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigInteger('libro_id')->unsigned();
            $table->bigInteger('etiqueta_id')->unsigned();
            $table->string('valor');
            $table->timestamps();
            $table->foreign('libro_id')->references('id')->on('libros')->onDelete("cascade");
            $table->foreign('etiqueta_id')->references('id')->on('etiquetas')->onDelete("cascade");
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
