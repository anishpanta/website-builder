<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TemplateData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_data', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name', 20);
			$table->string('middle_name', 20);
			$table->string('last_name', 20);
			$table->text('image');
			$table->text('short_info');
			$table->text('long_info');
			$table->text('skills_list1');
			$table->text('skills_list2');
			$table->text('skills_list3');
			$table->text('skills_list4');
			$table->text('service_name1');
			$table->text('service_name2');
			$table->text('service_name3');
			$table->text('service_info1');
			$table->text('service_info2');
			$table->text('service_info3');
			$table->string('phone_no',20);
			$table->string('email');
			$table->string('address');
			$table->string('facebook_link');
			$table->string('twitter_link');
			$table->string('google_link');
			$table->text('portfolio_images1');
			$table->text('portfolio_images2');
			$table->text('portfolio_images3');
			$table->integer('template_id')->unsigned();
			$table->foreign('template_id')
			      ->references('id')->on('templates')
			      ->onUpdate('cascade')
			      ->onDelete('cascade');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				  ->references('id')->on('users')
				  ->onUpdate('cascade')
				  ->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('template_data');
	}

}
