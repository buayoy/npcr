<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tbuserrole', function (Blueprint $table) {
            $table->increments('id');
            $table->string('userrolename');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            //foreignKey to tbuserrole
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')->references('id')->on('tbuserrole')->onDelete('cascade');

            $table->string('title');
            $table->string('fname');
            $table->string('lname');
            $table->string('tel')->nullable();
            $table->string('mtel')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('region_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('subdistrict_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->string('street')->nullable();
            $table->string('address')->nullable();
            $table->longtext('lat_location')->nullable();
            $table->longtext('long_location')->nullable();
            $table->string('priority')->nullable();
            $table->rememberToken();
            $table->boolean('status')->nullable();
            $table->timestamps();
        });

        Schema::create('tbfileupload_users', function (Blueprint $table) {
            $table->increments('id');

            //foreignKey to users
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('users');
    }
}
