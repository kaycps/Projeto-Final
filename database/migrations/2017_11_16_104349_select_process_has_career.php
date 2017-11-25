<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SelectProcessHasCareer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('select_process_career', function (Blueprint $table) {
            $table->integer('select_process_id')->unsigned();
            $table->foreign('select_process_id')->references('id')->on('select_processes'); 
         
            $table->integer('career_id')->unsigned();
            $table->foreign('career_id')->references('id')->on('careers');
            
            $table->integer('vagas')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
