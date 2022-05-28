<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUploadsTable extends Migration {

	public function up()
	{
		Schema::create('uploads', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->softDeletes();
			$table->text('image');
			$table->bigInteger('ad_id')->unsigned()->nullable();
			$table->string('type')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('uploads');
	}
}