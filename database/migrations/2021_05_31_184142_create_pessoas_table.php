<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
{
   
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('escola');
            $table->string('nome');
            $table->string('tema');
            $table->string('data');
            $table->string('horas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
