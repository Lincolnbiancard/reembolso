<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnDescricaoOnTableDespesas extends Migration
{
    
    public function up()
    {
        Schema::table('despesas', function (Blueprint $table) {
            $table->string('descricao');
        });
    }

    public function down()
    {
        Schema::table('despesas', function (Blueprint $table) {
            $table->dropColumn('descricao');
        });
    }
}
