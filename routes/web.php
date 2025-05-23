<?php

use Illuminate\Support\Facades\Route;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('menu_admin', function () {
    return view('pages.tambah_menu_admin');
});

Route::get('cash', function () {
    return view('pages.cash');
});

Route::get('pembayaran', function () {
    return view('pages.pembayaran');
});

Route::get('menu', function () {
    return view('pages.menu');
});

Route::get('tambah_pesanan', function () {
    return view('pages.tambah_pesanan');
});

Route::get('login', function () {
    return view('pages.login');
});

Route::get('koki', function () {
    return view('pages.koki');
});

Route::get('tambah_menu_pelanggan', function () {
    return view('pages.tambah_menu_pelanggan');
});

Route::get('lupa_password', function () {
    return view('pages.lupa_password');
});

Route::get('melihat', function () {
    return view('pages.melihat');
});

Route::get('pendapatan', function () {
    return view('pages.pendapatan');
});

Route::get('qriss', function () {
    return view('pages.qriss');
});

Route::get('register', function () {
    return view('pages.register');
});

Route::get('cetak_nomor', function () {
    return view('pages.cetak_nomor');
});

