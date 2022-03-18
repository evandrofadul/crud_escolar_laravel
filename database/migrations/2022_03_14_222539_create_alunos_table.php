<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email')->unique();
            $table->string('matricula')->unique();
            $table->string('turma');
            $table->string('disciplina1')->nullable();
            $table->string('nota_d1')->nullable();
            $table->string('frequencia_d1')->nullable();
            $table->string('disciplina2')->nullable();
            $table->string('nota_d2')->nullable();
            $table->string('frequencia_d2')->nullable();
            $table->string('disciplina3')->nullable();
            $table->string('nota_d3')->nullable();
            $table->string('frequencia_d3')->nullable();
            $table->string('disciplina4')->nullable();
            $table->string('nota_d4')->nullable();
            $table->string('frequencia_d4')->nullable();
            $table->string('disciplina5')->nullable();
            $table->string('nota_d5')->nullable();
            $table->string('frequencia_d5')->nullable();
            $table->unsignedBigInteger('id_user');
            $table->timestamps();
        });

        Schema::table('alunos', function (Blueprint $table) {
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('alunos');
    }
};