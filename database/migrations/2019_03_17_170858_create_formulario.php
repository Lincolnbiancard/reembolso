<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormulario extends Migration
{

    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cliente');
            $table->timestamp('data');
            $table->string('valor');
            $table->string('motivo');
            $table->string('comprovante');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}
