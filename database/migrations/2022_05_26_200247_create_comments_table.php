<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentsTable extends Migration {

	public function up()
	{
		Schema::create('comments', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->text('text');
			$table->bigInteger('user_id')->unsigned();
			$table->bigInteger('ad_id')->unsigned();
			$table->bigInteger('parent_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('comments');
	}
}