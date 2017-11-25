<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSelectProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('select_processes', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('dataInicio')->nullable();
            $table->dateTime('dataFim')->nullable();
            $table->boolean('ativo')->nullable();
            $table->string('nome')->nullable();
            $table->string('descrição')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('select_processes');
    }
}
