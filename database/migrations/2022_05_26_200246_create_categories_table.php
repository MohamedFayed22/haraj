<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('name');
			$table->bigInteger('parent_id')->unsigned()->nullable();
			$table->boolean('active');
			$table->integer('order');
		});
	}

	public function down()
	{
		Schema::drop('categories');
	}
}