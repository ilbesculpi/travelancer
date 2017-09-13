<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablesRegions extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('countries') ) {
			Schema::create('countries', function(Blueprint $table) {
				$table->char('code', 2)
						->primary();
				$table->string('name', 64);
				$table->double('latitude', 15, 8)
						->nullable();
				$table->double('longitude', 15, 8)
						->nullable();
			});
		}
		
		if( !Schema::hasTable('cities') ) {
			Schema::create('cities', function(Blueprint $table) {
				$table->increments('id');
				$table->char('country_code', 2);
				$table->string('name', 64);
				$table->double('latitude', 15, 8)
						->nullable();
				$table->double('longitude', 15, 8)
						->nullable();
				$table->foreign('country_code')
						->references('code')
						->on('countries')
						->onDelete('cascade');
			});
		}
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
