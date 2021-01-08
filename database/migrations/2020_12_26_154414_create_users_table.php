<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id')->unique();
            $table->string('email',128)->unique();
            $table->string('fullName',50);
            $table->string('phoneNumber')->unique();
            $table->string('facebook')->nullable();
            $table->integer('birthday')->nullable();
            $table->string('job')->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->tinyInteger('role')->default(1);
            $table->string('avatar')->nullable();
            $table->tinyInteger('status')->default(4);
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
