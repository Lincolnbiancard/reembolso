<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaDespesas extends Migration
{
    public function up()
    {
        Schema::create('despesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tipos');
        });
    }

    public function down()
    {
        Schema::dropIfExists('despesas');
    }
}
