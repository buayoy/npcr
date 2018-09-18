<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbnewPrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbnew_pr', function (Blueprint $table) {
            $table->increments('id');
            $table->string('news_pr_name')->nullable();
            $table->string('news_pr_detail')->nullable();
            $table->string('create_by')->nullable();
            $table->string('view')->nullable();
            $table->boolean('pin')->nullable();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });

        Schema::create('tbfileupload_new_pr', function (Blueprint $table) {
            $table->increments('id');

            //foreignKey to tbnew_pr
            $table->integer('new_pr_id')->unsigned();
            $table->foreign('new_pr_id')->references('id')->on('tbnew_pr')->onDelete('cascade');

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
        Schema::dropIfExists('tbnew_pr');
    }
}
