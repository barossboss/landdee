<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('provinces', function (Blueprint $table) {
            $table->increments('province_id');
            $table->string('province_name');
            $table->timestamps();
        });
         Schema::create('amphurs', function (Blueprint $table) {
            $table->increments('amphur_id');
            $table->string('amphur_name');
            $table->integer('province_id')->unsigned();
            $table->timestamps();

            $table->foreign('province_id')
            ->references('province_id')->on('provinces')
            ->onDelete('cascade');
        });
         Schema::create('tambols', function (Blueprint $table) {
            $table->increments('tambol_id');
            $table->string('tambol_name');
            $table->integer('amphur_id')->unsigned();
            $table->timestamps();

            $table->foreign('amphur_id')
            ->references('amphur_id')->on('amphurs')
            ->onDelete('cascade');
        });
          Schema::create('lands', function (Blueprint $table) {
            $table->increments('land_id');
            $table->string('name')->nullable();
            $table->string('location')->nullable();
            $table->integer('province_id')->unsigned()->nullable();
            $table->integer('amphur_id')->unsigned()->nullable();
            $table->integer('tambol_id')->unsigned()->nullable();
            $table->foreign('province_id')
            ->references('province_id')->on('provinces')
            ->onDelete('set null');
            $table->foreign('amphur_id')
            ->references('amphur_id')->on('amphurs')
            ->onDelete('set null');
            $table->foreign('tambol_id')
            ->references('tambol_id')->on('tambols')
            ->onDelete('set null');
            $table->double('area_num')->nullable();
            $table->double('price')->nullable();
            $table->string('printplatetype')->nullable();
            $table->string('desc', 1000)->nullable();
            $table->string('parcel_no')->nullable();
            $table->string('land_no')->nullable();
            $table->string('utmmap')->nullable();
            $table->string('survey_no')->nullable();
            $table->string('googlemap')->nullable();
            $table->string('image_path')->nullable();
            $table->string('province_name')->nullable();
            $table->string('amphur_name')->nullable();
            $table->string('tambol_name')->nullable();
            $table->timestamps();
        });
        Schema::create('landpictures', function (Blueprint $table) {
            $table->increments('landpicture_id');
            $table->integer('land_id')->unsigned()->nullable();
            $table->string('path');
            $table->foreign('land_id')
            ->references('land_id')->on('lands')
            ->onDelete('cascade');
            $table->timestamps();
        });
         Schema::create('landnears', function (Blueprint $table) {
            $table->increments('landnear_id');
            $table->integer('land_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('distance');
            $table->foreign('land_id')
            ->references('land_id')->on('lands')
            ->onDelete('cascade');
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
        //
        Schema::drop('landpictures');
        Schema::drop('landnears');
        Schema::drop('lands');
        Schema::drop('tambols');
        Schema::drop('amphurs');
        Schema::drop('provinces');
        
        
        
        
    }
}
