<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_rqs', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->tinyInteger('frequency');
            $table->tinyInteger('durationTime');
            $table->tinyInteger('targetTop');
            $table->tinyInteger('wishJob');
            $table->tinyInteger('completeExercise');
            $table->tinyInteger('outCondition');
            $table->tinyInteger('nowSkill');
            $table->tinyInteger('mission');
            $table->tinyInteger('status')->default(3);
            $table->foreignId('userId')->constrained('users');
            $table->foreignId('classesId')->constrained('classes');
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
        Schema::dropIfExists('course_rqs');
    }
}
