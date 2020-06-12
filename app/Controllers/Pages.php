<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home WPU'];

        echo view('layouts/header', $data);
        echo view('pages/home');
        echo view('layouts/footer');
    }

    public function about()
    {
        $data = ['title' => 'About WPU'];

        echo view('layouts/header', $data);
        echo view('pages/about');
        echo view('layouts/footer');
    }
}
