<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePlaces extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        if( !Schema::hasTable('places') ) {
			Schema::create('places', function(Blueprint $table) {
				$table->increments('id');
				$table->string('name', 64);
				$table->mediumText('description')->nullable();
				$table->char('country_code', 3);
				$table->char('city_code', 3);
				$table->double('latitude', 15, 8)
						->nullable();
				$table->double('longitude', 15, 8)
						->nullable();
				$table->timestamps();
			});
		}
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('places');
    }
	
}
