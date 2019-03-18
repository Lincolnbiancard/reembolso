<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarColunaSituacaoNaTabelaFormularios extends Migration
{
    public function up()
    {
        Schema::table('formularios', function (Blueprint $table) {
            $table->string('situacao')->default('Aberto');
        });
    }

    public function down()
    {
        Schema::table('formularios', function (Blueprint $table) {
            $table->dropColumn('situacao');
        });
    }
}
