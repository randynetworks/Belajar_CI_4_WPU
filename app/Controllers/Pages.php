<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = ['title' => 'Home WPU'];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = ['title' => 'About WPU'];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => "Rumah",
                    'alamat' => 'Jl. ABC 123',
                    'kota' => 'Bandung'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Setia Budi',
                    'kota' => 'Bandung'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
