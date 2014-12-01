<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCompaniesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('companies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('company');
			$table->string('contact_person')->nullable();
			$table->string('phone')->nullable();
			$table->string('email');
			$table->string('homepage_url');
			$table->string('slug');
			$table->text('description')->nullable();
			$table->string('password');
			$table->integer('bid');
			$table->timestamps();
		});

		$file = file_get_contents(app_path().'/database/sql/companies.sql');
		DB::statement($file);
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('companies');
	}

}
