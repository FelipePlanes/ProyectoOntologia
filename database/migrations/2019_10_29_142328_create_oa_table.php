<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_educativo');
            $table->foreign('id_educativo')->references('id')->on('lom_educativo')->onDelete('cascade');
            $table->integer('id_general');
            $table->foreign('id_general')->references('id')->on('lom_general')->onDelete('cascade');
            $table->integer('id_clasificacion');
            $table->foreign('id_clasificacion')->references('id')->on('lom_clasificacion')->onDelete('cascade');
            $table->integer('id_tecnica');
            $table->foreign('id_tecnica')->references('id')->on('lom_tecnica')->onDelete('cascade');
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
        Schema::dropIfExists('oa');
    }
}

/*REVISAR*/
