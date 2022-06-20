<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSctrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sctrs', function (Blueprint $table) {
            $table->id();

            $table->string('razon_social', 70);
            $table->string('ruc', 11);
            $table->string('actividad', 100);

            $table->string('nombre_contacto', 70);
            $table->string('email_contacto', 50);
            $table->string('celular_contacto', 11);
            $table->integer('total_trabajadores')->default(0);
            $table->string('planilla_total', 20);
            $table->string('adjunto_trama', 255)->nullable();

            $table->integer('id_admin')->default(0);
            $table->integer('id_estado')->default(0);
            $table->integer('archivar')->default(0);

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
        Schema::dropIfExists('sctrs');
    }
}
