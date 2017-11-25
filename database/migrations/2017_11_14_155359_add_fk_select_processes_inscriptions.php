<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkSelectProcessesInscriptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()

    {   //chave processo seletivo
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->integer('select_process_id')->unsigned();
            $table->foreign('select_process_id')->references('id')->on('select_processes');
        });    
        //chave cursos    
        Schema::table('inscriptions', function (Blueprint $table) {
            $table->integer('career_id')->unsigned();
            $table->foreign('career_id')->references('id')->on('careers');
        });    
        //chave usuario
         Schema::table('inscriptions', function (Blueprint $table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');  
        });
        //chave cota
         Schema::table('inscriptions', function (Blueprint $table) {
            $table->integer('quota_id')->unsigned();
            $table->foreign('quota_id')->references('id')->on('quotas');      

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['select_process_id']);
        $table->dropForeign(['career_id']);
        $table->dropForeign(['user_id']);
        $table->dropForeign(['quotas_id']);
    }
}
