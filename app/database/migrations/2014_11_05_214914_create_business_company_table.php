<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBusinessCompanyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('business_company', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('business_id');
			$table->integer('company_id');
			$table->timestamps();
		});
		$file = file_get_contents(app_path().'/database/sql/business_company.sql');
		DB::statement($file);
		DB::statement('UPDATE business_company SET business_id=(@temp:=business_id), business_id = company_id, company_id = @temp;'); //swap columns
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('business_company');
	}

}
