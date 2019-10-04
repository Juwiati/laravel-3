<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Auth::routes();
Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Auth::routes();
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

route::get('/kategori_artikel', 'kategori_artikel_Controller@index')->name('kategori_artikel.index');
route::get('/kategori_berita', 'kategori_berita_Controller@index')->name('kategori_artikel.index');
route::get('/kategori_galeri', 'kategori_galeri_Controller@index')->name('kategori_artikel.index');
route::get('/kategori_pengumuman', 'kategori_pengumuman_Controller@index')->name('kategori_pengumuman.index');

Route::get('/artikel', 'artikel_controller@index')->name('artikel.index');
Route::get('/berita', 'berita_controller@index')->name('berita.index');
Route::get('/galeri', 'galeri_controller@index')->name('galeri.index');
Route::get('/pengumuman', 'pengumuman_controller@index')->name('pengumuman.index');


route::get('/kategori_artikel', 'kategori_artikel_controller@index')->name('kategori_artikel.index');
route::get('/kategori_artikel/create','kategori_artikel_controller@create')->name('kategori_artikel.create');
route::post('/kategori_artikel','kategori_artikel_controller@store')->name('kategori_artikel.store');
route::get('/kategori_artikel/{id}', 'kategori_artikel_controller@show')->name('kategori_artikel.show');


Route::get('/artikel', 'artikel_controller@index')->name('artikel.index');
Route::get('/artikel/create', 'artikel_controller@create')->name('artikel.create');
Route::post('/artikel', 'artikel_controller@store')->name('artikel.store');
Route::get('/artikel/{id}', 'artikel_controller@show')->name('artikel.show');

route::get('/kategori_berita', 'kategori_berita_controller@index')->name('kategori_berita.index');
route::get('/kategori_berita/create', 'kategori_berita_controller@create')->name('kategori_berita.create');
route::post('/kategori_berita', 'kategori_berita_controller@store')->name('kategori_berita.store');
route::get('/kategori_berita/{id}', 'kategori_berita_controller@show')->name('kategori_berita.show');


Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/berita/create','berita_controller@create')->name('berita.create');
Route::post('/berita','berita_controller@store')->name('berita.store');
Route::get('/berita/{id}','berita_controller@show')->name('berita.show');

route::get('/kategori_galeri', 'kategori_galeri_controller@index')->name('kategori_galeri.index');
route::get('/kategori_galeri/create','kategori_galeri_controller@create')->name('kategori_galeri.create');
route::post('/kategori_galeri','kategori_galeri_controller@store')->name('kategori_galeri.store');
route::get('/kategori_galeri/{id}', 'kategori_galeri_controller@show')->name('kategori_galeri.show');


Route::get('/galeri', 'galeri_controller@index')->name('galeri.index');
Route::get('/galeri/create', 'galeri_controller@create')->name('galeri.create');
Route::post('/galeri', 'galeri_controller@store')->name('galeri.store');
Route::get('/galeri/{id}', 'galeri_controller@show')->name('galeri.show');


route::get('/kategori_pengumuman', 'kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
route::get('/kategori_pengumuman/create','kategori_pengumuman_controller@create')->name('kategori_pengumuman.create');
route::post('/kategori_pengumuman','kategori_pengumuman_controller@store')->name('kategori_pengumuman.store');
route::get('/kategori_pengumuman/{id}', 'kategori_pengumuman_controller@show')->name('kategori_pengumuman.show');


Route::get('/pengumuman', 'pengumuman_controller@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'pengumuman_controller@create')->name('pengumuman.create');
Route::post('/pengumuman', 'pengumuman_controller@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'pengumuman_controller@show')->name('pengumuman.show');