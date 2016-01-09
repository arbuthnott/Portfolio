<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table){
			$table->increments('id');
            $table->string('name');
            $table->string('alias')->unique();
			$table->string('github_link')->nullable();
			$table->string('other_link')->nullable();
            $table->integer('importance')->unsigned()->default(0);
            $table->date('completion_date');
            $table->text('description');
			$table->timestamps();
		});
		
		Schema::create('project_skill', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->integer('skill_id')->unsigned();
            
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('skill_id')->references('id')->on('skills');
        });
		
		Schema::create('course_project', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('project_id')->unsigned();
            
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('project_id')->references('id')->on('projects');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('course_project');
		Schema::drop('project_skill');
		Schema::drop('projects');
	}

}
