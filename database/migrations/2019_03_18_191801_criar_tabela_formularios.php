<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaFormularios extends Migration
{
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cliente');
            $table->timestamp('data');
            $table->string('valor');
            $table->string('situacao')->default('Aberto');    
            $table->string('despesa_id');
            $table->unsignedBigInteger('user_id')->default(1);
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}

