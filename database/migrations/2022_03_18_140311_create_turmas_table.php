<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{

    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('codigo')->unique();
            $table->string('ano_inicio');
            $table->string('ano_conclusao');
            $table->unsignedBigInteger('id_turma');
        });

        Schema::table('turmas', function (Blueprint $table) {
            $table->foreign('id_turma')->references('id')->on('users')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
