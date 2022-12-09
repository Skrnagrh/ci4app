<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        // $faker = \Faker\Factory::create();
        $data = [
            'title' => 'Home',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('pages/about', $data);

    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'alamat'=> [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. abc No.123',
                    'kota' => 'Serang'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. dfe No.456',
                    'kota' => 'Cilegon'
                ]
            ]
        ];
        return view('pages/contact', $data);

    }
    
}
