<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHogarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hogars', function (Blueprint $table) {
            $table->id();

            $table->string('nombres', 70);
            $table->date('fecha_nacimiento');
            $table->string('celular', 11);
            $table->string('email', 50);
            $table->string('direccion', 255);
            $table->string('distrito', 50);
            $table->string('provincia', 50);
            $table->string('departamento', 50);

            $table->integer('tipo_edificacion');
            $table->string('valor_casa', 25)->nullable();
            $table->string('valor_departamento', 25)->nullable();
            $table->string('valor_contenido', 25)->nullable();
            $table->integer('cobertura');

            $table->integer('seguridad1')->default(0);
            $table->integer('seguridad2')->default(0);
            $table->integer('seguridad3')->default(0);

            $table->integer('tipo_uso_casa')->nullable();;
            $table->integer('casa_playa')->default(0);
            $table->string('metros_orilla', 10)->nullable();
            $table->integer('club_playa')->default(0);

            $table->integer('tipo_pago');
            $table->string('metro_cuadrado', 10)->nullable();
            $table->string('anio_construccion', 4)->nullable();
            $table->integer('numero_pisos')->default(0);
            $table->integer('numero_sotanos')->default(0);

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
        Schema::dropIfExists('hogars');
    }
}
