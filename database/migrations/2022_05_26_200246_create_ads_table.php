<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdsTable extends Migration {

	public function up()
	{
		Schema::create('ads', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->string('lat')->nullable();
			$table->string('lang')->nullable();
			$table->text('description');
			$table->boolean('commentable');
			$table->string('name');
			$table->boolean('is_bloked');
			$table->string('contact')->nullable();
			$table->bigInteger('country_id')->unsigned()->nullable();
			$table->bigInteger('city_id')->unsigned()->nullable();
		});
	}

	public function down()
	{
		Schema::drop('ads');
	}
}