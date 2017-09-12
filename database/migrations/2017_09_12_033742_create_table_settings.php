<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSettings extends Migration
{
	
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
		if( !Schema::hasTable('settings') ) {
			Schema::create('settings', function(Blueprint $table) {
				$table->string('key', 32);
				$table->string('value', 255);
				$table->primary('key');
			});
		}
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
	
}
