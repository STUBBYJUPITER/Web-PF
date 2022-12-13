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
        Schema::create('campañas', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion');
            $table->string('tipo_sangre',3);
            $table->integer('unidad_requerida');
            $table->string('descripcion',100);
            $table->string('nombre_campañas',100);
            $table->unsignedBigInteger('user_id2');
            $table->foreign('user_id2')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('campañas');
    }
};
