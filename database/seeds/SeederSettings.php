<?php

use Illuminate\Database\Seeder;
use App\Models\Settings;

class SeederSettings extends Seeder
{
	
    protected $records = [
		'app.name' => 'Travelancer',
		'app.logo' => '/images/logo.png',
	];
	
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
		foreach($this->records as $key => $value) {
			$settings = Settings::firstOrNew(['key' => $key]);
			$settings->value = $value;
			$settings->save();
		}
    }
	
}
