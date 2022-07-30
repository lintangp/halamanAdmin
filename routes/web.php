<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('artikel', function () {
    return view('artikel');
});

Route::get('program', function () {
    return view('program_desa');
});

Route::get('potensi', function () {
    return view('potensi_desa');
});

Route::get('produk', function () {
    return view('produk_unggulan');
});

Route::get('album', function () {
    return view('album');
});

Route::get('galeri', function () {
    return view('galeri');
});

Route::get('banner', function () {
    return view('banner');
});

Route::get('pengurus', function () {
    return view('pengurus');
});

Route::get('tambah_artikel', function () {
    return view('tambah/tambah_artikel');
});

Route::get('tambah_program', function () {
    return view('tambah/tambah_program');
});

Route::get('tambah_produk', function () {
    return view('tambah/tambah_produk');
});

Route::get('tambah_potensi', function () {
    return view('tambah/tambah_potensi');
});

Route::get('tambah_album', function () {
    return view('tambah/tambah_album');
});

Route::get('tambah_pengurus', function () {
    return view('tambah/tambah_pengurus');
});

Route::get('tambah_galeri', function () {
    return view('tambah/tambah_galeri');
});

Route::get('tambah_banner', function () {
    return view('tambah/tambah_banner');
});

Route::get('edit_artikel', function () {
    return view('edit/edit_artikel');
});

Route::get('edit_program', function () {
    return view('edit/edit_program');
});

Route::get('edit_potensi', function () {
    return view('edit/edit_potensi');
});

Route::get('edit_produk', function () {
    return view('edit/edit_produk');
});

Route::get('edit_album', function () {
    return view('edit/edit_album');
});

Route::get('edit_galeri', function () {
    return view('edit/edit_galeri');
});

Route::get('edit_banner', function () {
    return view('edit/edit_banner');
});

Route::get('edit_pengurus', function () {
    return view('edit/edit_pengurus');
});

Route::get('detail_pengurus', function () {
    return view('details/detail_pengurus');
});


Route::get('detail_potensi', function () {
    return view('details/detail_potensi');
});

Route::get('detail_album', function () {
    return view('details/detail_album');
});

Route::get('detail_galeri', function () {
    return view('details/detail_galeri');
});

Route::get('detail_produk', function () {
    return view('details/detail_produk');
});

Route::get('detail_banner', function () {
    return view('details/detail_banner');
});

Route::get('detail_artikel', function () {
    return view('details/detail_artikel');
});

Route::get('detail_program', function () {
    return view('details/detail_program');
});

Route::get('detail_program', function () {
    return view('details/detail_program');
});