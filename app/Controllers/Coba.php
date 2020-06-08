<?php

namespace App\Controllers;

class Coba extends BaseController
{
	public function index()
	{
		// return view('welcome_message');
		echo 'hello world';
	}

	public function about($nama = null)
	{

		echo "helo nama saya $nama.";
	}
}
