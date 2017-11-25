<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SelectProcessHasQuota extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('select_process_quota', function (Blueprint $table) {
            $table->integer('quota_id')->unsigned();
            $table->foreign('quota_id')->references('id')->on('quotas'); 
         
            $table->integer('select_process_id')->unsigned();
            $table->foreign('select_process_id')->references('id')->on('select_processes');
            
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
