<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kategori_artikel','kategori_artikel_controller@index')->name('kategori_artikel.index');
Route::get('/kategori_galeri','kategori_galeri_controller@index')->name('kategori_galeri.index');
Route::get('/kategori_berita','kategori_berita_controller@index')->name('kategori_berita.index');
Route::get('/kategori_pengumuman','kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
Route::get('/artikel','artikel_controller@index')->name('artikel.index');
Route::get('/galeri','galeri_controller@index')->name('galeri.index');
Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/pengumuman','pengumuman_controller@index')->name('pengumuman.index');