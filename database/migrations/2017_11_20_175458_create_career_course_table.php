<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareerCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('career_course', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('career_id') -> unsigned();
            $table->integer('course_id') -> unsigned();
  
            $table->foreign('career_id') -> references('id') -> on('careers') -> onDelete('cascade');
            $table->foreign('course_id') -> references('id') -> on('courses') -> onDelete('cascade');
            
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
        Schema::dropIfExists('career_course');
    }
}
