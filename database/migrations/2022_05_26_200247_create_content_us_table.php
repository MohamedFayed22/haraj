<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContentUsTable extends Migration {

	public function up()
	{
		Schema::create('content_us', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('email')->nullable();
			$table->string('name')->nullable();
			$table->longText('message')->nullable();
			$table->string('phone')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('content_us');
	}
}