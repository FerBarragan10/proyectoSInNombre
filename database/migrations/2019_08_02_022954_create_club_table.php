<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('responsable');
            $table->string('logo');
            $table->string('redsocial');
            $table->string('direccion');
            $table->integer('telefono');
            $table->string('email');
            $table->string('descripcion');
            $table->string('geocalizacion');
            $table->string('fotos');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club');
    }
}
