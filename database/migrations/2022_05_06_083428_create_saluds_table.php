<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaludsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saluds', function (Blueprint $table) {
            $table->id();

            $table->string('titular_nombres', 70);
            $table->date('titular_fecha_nacimiento');
            $table->string('celular', 11);
            $table->string('email', 50);

            $table->string('conyugue_nombres', 70)->nullable();;
            $table->date('conyugue_fecha_nacimiento')->nullable();;

            $table->string('hijo_nombres', 70)->nullable();
            $table->date('hijo_fecha_nacimiento')->nullable();

            $table->string('hijo_nombres2', 70)->nullable();
            $table->date('hijo_fecha_nacimiento2')->nullable();

            $table->string('hijo_nombres3', 70)->nullable();
            $table->date('hijo_fecha_nacimiento3')->nullable();

            $table->integer('migracion')->default(0);
            $table->integer('plan1')->default(0);
            $table->integer('plan2')->default(0);
            $table->integer('plan3')->default(0);
            $table->integer('plan4')->default(0);

            $table->integer('tipo_pago')->default(0);

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
        Schema::dropIfExists('saluds');
    }
}
