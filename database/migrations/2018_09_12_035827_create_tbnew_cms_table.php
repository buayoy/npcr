<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbnewCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbnew_cm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_cm_name')->nullable();
            $table->string('news_cm_detail')->nullable();
            $table->string('create_by')->nullable();
            $table->string('view')->nullable();
            $table->boolean('pin')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });

        Schema::create('tbfileupload_new_cm', function (Blueprint $table) {
            $table->increments('id');

            //foreignKey to tbnew_cm
            $table->integer('new_cm_id')->unsigned();
            $table->foreign('new_cm_id')->references('id')->on('tbnew_cm')->onDelete('cascade');

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
        Schema::dropIfExists('tbnew_cm');
    }
}
