<?php

namespace App\Controllers\Admin;

// menggunakan use untuk mengambil si BaseControllerya

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo 'ini adalah controoler user method index yang ada di namespace admin';
    }

    public function about($nama = null)
    {

        echo "helo nama saya $nama.";
    }
}
