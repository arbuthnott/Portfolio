<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('courses', function(Blueprint $table){
			$table->increments('id');
            $table->string('code')->unique();
			$table->string('name');
            $table->string('alias')->unique();
            $table->integer('importance')->unsigned()->default(0);
            $table->double('grade')->nullable();
            $table->date('completion_date');
            $table->text('topic_list');
			$table->text('description');
			$table->timestamps();
		});
        
        Schema::create('course_skill', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('skill_id')->unsigned();
            
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('skill_id')->references('id')->on('skills');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('course_skill');
		Schema::drop('courses');
	}

}
