<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('categories', function(Blueprint $table) {
			$table->foreign('parent_id')->references('id')->on('categories')
						->onDelete('cascade')
						->onUpdate('set null');
		});
		Schema::table('ads', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('ads', function(Blueprint $table) {
			$table->foreign('city_id')->references('id')->on('cities')
						->onDelete('set null')
						->onUpdate('set null');
		});
		Schema::table('uploads', function(Blueprint $table) {
			$table->foreign('ad_id')->references('id')->on('ads')
						->onDelete('cascade')
						->onUpdate('set null');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('country_id')->references('id')->on('countries')
						->onDelete('cascade')
						->onUpdate('set null');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('ad_id')->references('id')->on('ads')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->foreign('parent_id')->references('id')->on('comments')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('favourites', function(Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('favourites', function(Blueprint $table) {
			$table->foreign('ad_id')->references('id')->on('ads')
						->onDelete('cascade')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('categories', function(Blueprint $table) {
			$table->dropForeign('categories_parent_id_foreign');
		});
		Schema::table('ads', function(Blueprint $table) {
			$table->dropForeign('ads_country_id_foreign');
		});
		Schema::table('ads', function(Blueprint $table) {
			$table->dropForeign('ads_city_id_foreign');
		});
		Schema::table('uploads', function(Blueprint $table) {
			$table->dropForeign('uploads_ad_id_foreign');
		});
		Schema::table('cities', function(Blueprint $table) {
			$table->dropForeign('cities_country_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_user_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_ad_id_foreign');
		});
		Schema::table('comments', function(Blueprint $table) {
			$table->dropForeign('comments_parent_id_foreign');
		});
		Schema::table('favourites', function(Blueprint $table) {
			$table->dropForeign('favourites_user_id_foreign');
		});
		Schema::table('favourites', function(Blueprint $table) {
			$table->dropForeign('favourites_ad_id_foreign');
		});
	}
}