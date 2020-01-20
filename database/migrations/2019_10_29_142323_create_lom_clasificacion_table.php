<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLomClasificacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lom_clasificacion', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('id_oa')->unsigned();
            $table->foreign('id_oa')->references('id')->on('oa')->onDelete('cascade');
            */$table->string('lom_cladescripcion');
            $table->string('lom_clapalabra_clave');
            $table->string('lom_claproposito');
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
        Schema::dropIfExists('lom_clasificacion');
    }
}
