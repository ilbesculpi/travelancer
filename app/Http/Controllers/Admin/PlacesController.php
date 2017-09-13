<?php

namespace App\Http\Controllers\Admin;

class PlacesController extends AdminController {
	
	public function index()
	{
		return view('admin.places.index');
	}
	
}
