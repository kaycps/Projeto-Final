<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');          
            $table->string('nome')->nullable();
            $table->string('rg')->nullable();
            $table->string('cpf')->nullable();
            $table->date('dataNascimento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('nomePai')->nullable();
            $table->string('nomeMãe')->nullable();
            $table->string('passaporte')->nullable();
            $table->string('naturalidade')->nullable();
            $table->string('telefone')->nullable();
            $table->string('escolaridade')->nullable();
            $table->string('emissorRG')->nullable();
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
        Schema::drop('profiles');
    }
}
