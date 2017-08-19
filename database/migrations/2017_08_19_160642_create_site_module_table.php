<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSiteModuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('site_module', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('module_type _id')->index('module_type');
			$table->string('name', 50);
			$table->string('description', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('site_module');
	}

}
