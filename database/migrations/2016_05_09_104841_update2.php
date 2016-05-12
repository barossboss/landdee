<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::table('lands', function (Blueprint $table) {
            //
            $table->string('contact_name')->nullable();
            $table->string('contact_tel')->nullable();
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
        Schema::table('lands', function (Blueprint $table) {
            //
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_tel');
        });
    }
}
