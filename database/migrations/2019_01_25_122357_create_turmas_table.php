<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('disciplina');
            $table->string('nome');
            $table->string('descricao');
            $table->string('periodo');
            $table->string('inicio');
            $table->string('fim');

            $table->timestamps();
        });

        Schema::create('turma_user', function (Blueprint $table) {

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('turma_id');
            $table->integer('role_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('turma_id')->references('id')->on('turmas');

            $table->primary(['user_id', 'turma_id']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turmas');
    }
}
