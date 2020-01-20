<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLomEducativoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lom_educativo', function (Blueprint $table) {
            $table->increments('id');
            /*$table->integer('id_oa')->unsigned();
            $table->foreign('id_oa')->references('id')->on('oa')->onDelete('cascade');
            */$table->string('lom_educdescripcion');
            $table->string('lom_educnivel_interactividad');
            $table->string('lom_eductipo_interactividad');
            $table->string('lom_eductipo_recurso_educativo');
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
        Schema::dropIfExists('lom_educativo');
    }
}
