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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('token')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('category_main', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string('category_name');
            $table->string('category_desc')->unique();
        });
        Schema::create('company_main', function (Blueprint $table) {
            $table->increments('company_id');
            $table->string('company_name');
            $table->string('company_address');
            $table->integer('zipcode');
            $table->integer('contactno');
            $table->integer('fax');
            $table->integer('emailaddress');
            $table->string('status');
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
