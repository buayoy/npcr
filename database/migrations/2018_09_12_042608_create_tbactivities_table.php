<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbactivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbactivity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activityname')->nullable();
            $table->string('activitydetail')->nullable();
            $table->string('create_by')->nullable();
            $table->string('view')->nullable();
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->integer('region_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('subdistrict_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->string('street')->nullable();
            $table->string('address')->nullable();
            $table->longtext('lat_location')->nullable();
            $table->longtext('long_location')->nullable();
            $table->boolean('pin')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });

        Schema::create('tbfileupload_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('activityname');
            //foreignKey to tbactivity
            $table->integer('activity_id')->unsigned();
            $table->foreign('activity_id')->references('id')->on('tbactivity')->onDelete('cascade');

            $table->string('filename');
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
        Schema::dropIfExists('tbactivity');
    }
}
