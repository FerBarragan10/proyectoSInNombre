<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlquilersTable extends Migration
{
    /**
     * Run the migrations.
     
     * @return void
     */
    public function up()
    {
        Schema::create('alquilers', function (Blueprint $table) {
            $table->integer('cancha');
            $table->timestamp('turno');
            $table->string('estado');
            $table->integer('usuario')->nullable();
            $table->primary(['cancha','turno']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alquilers');
    }
}
