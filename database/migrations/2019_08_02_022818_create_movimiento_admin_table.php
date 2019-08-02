<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientoAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientoAdmin', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamp('hora');
            $table->string('movimiento');
            $table->integer('cancha');
            $table->timestamp('turno');
            $table->integer('administrador');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientoAdmin');
    }
}
