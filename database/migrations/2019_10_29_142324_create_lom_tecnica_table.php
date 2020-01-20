<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLomTecnicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lom_tecnica', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('id_oa')->unsigned();
            $table->foreign('id_oa')->references('id')->on('oa')->onDelete('cascade');
            */$table->string('lom_tecduracion');
            $table->string('lom_tecformato');
            $table->string('lom_teclocalizacion');
            $table->string('lom_tectamano');
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
        Schema::dropIfExists('lom_tecnica');
    }
}
