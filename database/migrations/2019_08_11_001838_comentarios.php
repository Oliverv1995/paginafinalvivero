<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comentarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario', function(Blueprint $table)
        {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->string('descripcion');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario');
    }
}
