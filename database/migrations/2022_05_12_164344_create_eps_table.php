<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eps', function (Blueprint $table) {
            $table->id();

            $table->string('razon_social', 70);
            $table->string('direccion', 70);
            $table->string('telefono', 11);
            $table->string('ruc', 11);
            $table->string('nombre_contacto', 70);
            $table->string('cargo_contacto', 50);
            $table->string('celular_contacto', 11);
            $table->string('email_contacto', 50);
            $table->string('nombre_representante_legal', 70)->nullable();
            $table->string('cargo_representante_legal', 50)->nullable();
            $table->string('broker', 70)->default('RICARDO ANGULO RIEDNER');
            $table->string('planilla_anual', 20)->nullable();
            $table->integer('nro_aporte_anio_con_grati')->default(0);
            $table->integer('nro_aporte_anio_sin_grati')->default(0);

            $table->integer('numero_total_trabajadores')->default(0);;
            $table->integer('titutar_solo')->default(0);
            $table->integer('titular1_dependiente')->default(0);
            $table->integer('titular2_dependiente')->default(0);
            $table->integer('titular3_dependiente')->default(0);
            $table->integer('numero_total_asegurados_eps_actual')->default(0);

            $table->integer('eps');
            $table->string('eps_actual', 30)->nullable();
            $table->string('compania_seguro', 30)->nullable();
            $table->string('adjunto_plan_salud', 255)->nullable();
            $table->string('adjunto_siniestralidad', 255)->nullable();

            $table->integer('id_usuario')->default(0);
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
        Schema::dropIfExists('eps');
    }
}
