<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profile', [
        'photo'         => asset('images/foto.jpg'),
        'initials'      => 'FM',
        'first_name'    => 'Faris',
        'last_name'     => 'Musyaffa',
        'status'        => 'Mahasiswa Aktif PENS',
        'role_short'    => 'Ahli makan dan tidur.',
        'tagline'       => 'Crafting digital experiences with purpose',
        'bio'           => 'Mahasiswa yang memiliki ketertarikan pada pengembangan aplikasi...',
        'tags'          => ['Laravel', 'Flutter', 'UI/UX', 'Figma', 'Valorant', 'Palia'],
        'availability'  => 'Dijual',
        'portfolio_url' => '#',
        'email'         => '#',
        'github'        => '#',
        'linkedin'      => '#',
        'location'      => 'Surabaya, Indonesia',
    ]);
});