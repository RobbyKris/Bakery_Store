<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/indexOrder', function () {
    return view('Order/index');
});

Route::get('/preorder', function () {
    return view('Order/preorder');
});

Route::get('/preorder', function () {
    return view('Order/preorder', [
        'preorder' => [
            [
                'images' => 'images/resep_legit.png',
                'nama' => 'Lapis Legit',
                'stok' => '20',
                'deskripsi' => '1 Loyang',
                'harga' => '45.000'
            ],
            [
                'images' => 'images/resep_surabaya.png',
                'nama' => 'Lapis Surabaya',
                'stok' => '15',
                'deskripsi' => '1 Loyang',
                'harga' => '75.000'
            ],
            [
                'images' => 'images/resep_brownies.png',
                'nama' => 'Brownies',
                'stok' => '10',
                'deskripsi' => '1 Loyang',
                'harga' => '75.000'
            ],
            [
                'images' => 'images/resep_legit.png',
                'nama' => 'Lapis Legit',
                'stok' => '20',
                'deskripsi' => '1 Loyang',
                'harga' => '45.000'
            ]
        ]
    ]);
});

Route::get('/ready', function () {
    return view('Order/ready', [
        'ready' => [
            [
                'images' => 'images/resep_legit.png',
                'nama' => 'Lapis Legit',
                'stok' => '20',
                'deskripsi' => '1 Loyang',
                'harga' => '45.000'
            ],
            [
                'images' => 'images/resep_surabaya.png',
                'nama' => 'Lapis Surabaya',
                'stok' => '15',
                'deskripsi' => '1 Loyang',
                'harga' => '75.000'
            ],
            [
                'images' => 'images/resep_brownies.png',
                'nama' => 'Brownies',
                'stok' => '10',
                'deskripsi' => '1 Loyang',
                'harga' => '75.000'
            ],
            [
                'images' => 'images/resep_legit.png',
                'nama' => 'Lapis Legit',
                'stok' => '20',
                'deskripsi' => '1 Loyang',
                'harga' => '45.000'
            ]
        ]
    ]);
});

Route::get('/hampers', function () {
    return view('Order/hampers', [
        'hampers' => [
            [
                'images' => 'images/hampersA.jpg',
                'nama' => 'Paket Hampers A',
                'stok' => '6',
                'deskripsi' => '1 Loyang Lapis Legit + Roti Bolu + Card',
                'harga' => '250.000'
            ],
            [
                'images' => 'images/hampersB.jpg',
                'nama' => 'Paket Hampers B',
                'stok' => '8',
                'deskripsi' => '1 Loyang Lapis Surabaya + Choco Milk + Card',
                'harga' => '375.000'
            ],
            [
                'images' => 'images/hampersC.jpg',
                'nama' => 'Paket Hampers C',
                'stok' => '10',
                'deskripsi' => '1 Toples Nastar + Roti Sosis + Card',
                'harga' => '400.000'
            ]
        ]
    ]);
});

Route::get('/bayar', function () {
    return view('Order/bayar');
});

Route::get('/nota', function () {
    return view('Order/nota');
});

Route::get('/history', function () {
    return view('Order/history', [
        'history' => [
            [
                'images' => 'images/resep_legit.png',
                'nama' => 'Lapis Legit',
                'jml_barang' => '20',
                'harga' => '45.000'
            ],
            [
                'images' => 'images/resep_surabaya.png',
                'nama' => 'Lapis Surabaya',
                'jml_barang' => '15',
                'harga' => '75.000'
            ],
            [
                'images' => 'images/resep_brownies.png',
                'nama' => 'Brownies',
                'jml_barang' => '10',
                'harga' => '75.000'
            ],
            [
                'images' => 'images/resep_legit.png',
                'nama' => 'Lapis Legit',
                'jml_barang' => '20',
                'harga' => '45.000'
            ]
        ]
    ]);
});

Route::get('/indexProfil', function () {
    return view('Profil/index');
});

Route::get('/updateProfil', function () {
    return view('Profil/update');
});

Route::get('/address', function () {
    return view('Profil/address', [
        'alamat' => [
            [
                'nama' => 'Jl. Anggrek Blok G7 No.12'
            ],
            [
                'nama' => 'Jl. Janti Blok H No.9'
            ],
            [
                'nama' => 'Jl. Semarang Blok I No.337'
            ]
        ]
    ]);
});

Route::get('/createAddress', function () {
    return view('Profil/createAddress');
});

Route::get('/editAddress', function () {
    return view('Profil/editAddress');
});