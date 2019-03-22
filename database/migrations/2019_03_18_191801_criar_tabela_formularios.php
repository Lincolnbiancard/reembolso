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
            $table->string('comprovante');
            $table->string('situacao')->default('Aberto');    
            $table->integer('despesa_id')->default(1)->unsigned(); //Adicionando a coluna na tabela para relacionamento com despesas
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('formularios');
    }
}

