<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('skills', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
            $table->string('alias')->unique();
            $table->integer('importance')->unsigned()->default(0);
			$table->text('description');
			$table->text('experience')->nullable();
			$table->timestamps();
		});
		
		Schema::create('skill_relation', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('skill_id')->unsigned();
			$table->integer('related_id')->unsigned();
			
			$table->foreign('skill_id')->references('id')->on('skills')->onDelete('cascade');
			$table->foreign('related_id')->references('id')->on('skills')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('skill_relation');
		Schema::drop('skills');
	}

}
