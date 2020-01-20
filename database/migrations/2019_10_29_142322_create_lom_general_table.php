<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLomGeneralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lom_general', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('id_oa')->unsigned();
            $table->foreign('id_oa')->references('id')->on('oa')->onDelete('cascade');
            */$table->string('lom_genambito');
            $table->string('lom_gendescripcion');
            $table->string('lom_genpalabra_clave');
            $table->string('lom_gentitulo');
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
        Schema::dropIfExists('lom_general');
    }
}
