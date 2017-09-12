<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 64);
            $table->string('email', 64)->unique();
            $table->string('password', 64);
			$table->string('avatar', 255)
					->nullable();
				$table->enum('role', ['admin', 'guest'])
					->nullable()
					->default('guest');
				$table->timestamp('last_login')
					->nullable();
				$table->smallInteger('login_attempts')
					->nullable()
					->default(0);
				$table->enum('status', ['active', 'pending', 'blocked'])
					->nullable()
					->default('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
	
}
