<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkInscriptionsExemptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::table('exemptions', function (Blueprint $table) {
            $table->integer('inscription_id')->unsigned();
            $table->foreign('inscription_id')->references('id')->on('inscriptions');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['inscription_id']);
    }
}
