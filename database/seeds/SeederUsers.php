<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class SeederUsers extends Seeder
{
	
    protected $records = [
		[
			'id' => 1,
			'name' => 'Administrator',
			'email' => 'admin@localhost.com',
			'password' => 'adminadmin',
			'avatar' => User::DEFAULT_PICTURE,
			'role' => User::ROLE_ADMIN,
			'status' => User::STATUS_ACTIVE
		]
	];
	
	/**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        foreach($this->records as $record) {
			$user = User::firstOrNew(['email' => $record['email']]);
			$user->name = $record['name'];
			$user->email = $record['email'];
			$user->password = bcrypt(($record['password']));
			$user->avatar = $record['avatar'];
			$user->role = $record['role'];
			$user->status = $record['status'];
			$user->save();
		}
    }
	
}
