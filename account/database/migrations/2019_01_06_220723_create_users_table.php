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
        // create database
        
        // create user
        Schema::create('users', function (Blueprint $table) {
            // id
            $table->increments('id');
            // username
            $table->string('username', 32)->unique();
            // password
            $table->string('password', 150)->nullable();
            // salt_1
            $table->string('salt_1', 8)->nullable();
            // salt_2
            $table->string('salt_2', 8)->nullable();
            // last login
            $table->timestamp('last_login')->nullable();
            // timestamps created_at, updated_at
            $table->timestamps();
            // soft deletes deleted_at
            $table->softDeletes();
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
