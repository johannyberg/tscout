<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('category_company', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('category_id')->unsigned()->index();
			$table->integer('company_id')->unsigned()->index();
			$table->timestamps();
		});

		Schema::table('category_company', function($table) {
			$table->foreign('company_id')
				->references('id')
				->on('companies')
				->onDelete('cascade');
		});

		$file = file_get_contents(app_path().'/database/sql/category_company.sql');
		DB::statement($file);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('category_company');
	}

}
