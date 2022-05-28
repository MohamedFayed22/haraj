<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagesTable extends Migration {

	public function up()
	{
		Schema::create('pages', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('title');
			$table->longText('content');
			$table->text('image')->nullable();
			$table->boolean('active');
		});
	}

	public function down()
	{
		Schema::drop('pages');
	}
}