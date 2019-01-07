<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_role', function (Blueprint $table) {
          // id
          $table->bigIncrements('id');
          // user_id
          $table->integer('user_id')->unsigned();
          // role_id
          $table->smallInteger('role_id')->unsigned();
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
        Schema::dropIfExists('user_role');
    }
}
