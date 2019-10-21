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
route::get('/kategori_artikel/{id}/edit', 'kategori_artikel_controller@edit')->name('kategori_artikel.edit');
route::patch('/kategori_artikel/{id}','kategori_artikel_controller@update')->name('kategori_artikel.update');
route::delete('/kategori_artikel/{id}','kategori_artikel_controller@destroy')->name('kategori_artikel.destroy');


Route::get('/artikel', 'artikel_controller@index')->name('artikel.index');
Route::get('/artikel/create', 'artikel_controller@create')->name('artikel.create');
Route::post('/artikel', 'artikel_controller@store')->name('artikel.store');
Route::get('/artikel/{id}', 'artikel_controller@show')->name('artikel.show');
route::get('/artikel/{id}/edit', 'artikel_controller@edit')->name('artikel.edit');
route::patch('/artikel/{id}','artikel_controller@update')->name('artikel.update');
route::delete('/artikel/{id}','artikel_controller@destroy')->name('artikel.destroy');


route::get('/kategori_berita', 'kategori_berita_controller@index')->name('kategori_berita.index');
route::get('/kategori_berita/create', 'kategori_berita_controller@create')->name('kategori_berita.create');
route::post('/kategori_berita', 'kategori_berita_controller@store')->name('kategori_berita.store');
route::get('/kategori_berita/{id}', 'kategori_berita_controller@show')->name('kategori_berita.show');
route::get('/kategori_berita/{id}/edit', 'kategori_berita_controller@edit')->name('kategori_berita.edit');
route::patch('/kategori_berita/{id}','kategori_berita_controller@update')->name('kategori_berita.update');
route::delete('/kategori_berita/{id}','kategori_berita_controller@destroy')->name('kategori_berita.destroy');

Route::get('/berita','berita_controller@index')->name('berita.index');
Route::get('/berita/create','berita_controller@create')->name('berita.create');
Route::post('/berita','berita_controller@store')->name('berita.store');
Route::get('/berita/{id}','berita_controller@show')->name('berita.show');
route::get('/berita/{id}/edit', 'berita_controller@edit')->name('berita.edit');
route::patch('/berita/{id}','berita_controller@update')->name('berita.update');
route::delete('/berita/{id}','berita_controller@destroy')->name('berita.destroy');

route::get('/kategori_galeri', 'kategori_galeri_controller@index')->name('kategori_galeri.index');
route::get('/kategori_galeri/create','kategori_galeri_controller@create')->name('kategori_galeri.create');
route::post('/kategori_galeri','kategori_galeri_controller@store')->name('kategori_galeri.store');
route::get('/kategori_galeri/{id}', 'kategori_galeri_controller@show')->name('kategori_galeri.show');
route::get('/kategori_galeri/{id}/edit', 'kategori_galeri_controller@edit')->name('kategori_galeri.edit');
route::patch('/kategori_galeri/{id}','kategori_galeri_controller@update')->name('kategori_galeri.update');
route::delete('/kategori_galeri/{id}','kategori_galeri_controller@destroy')->name('kategori_galeri.destroy');

Route::get('/galeri', 'galeri_controller@index')->name('galeri.index');
Route::get('/galeri/create', 'galeri_controller@create')->name('galeri.create');
Route::post('/galeri', 'galeri_controller@store')->name('galeri.store');
Route::get('/galeri/{id}', 'galeri_controller@show')->name('galeri.show');
route::get('/galeri/{id}/edit', 'galeri_controller@edit')->name('galeri.edit');
route::patch('/galeri/{id}','galeri_controller@update')->name('galeri.update');
route::delete('/galeri/{id}','galeri_controller@destroy')->name('galeri.destroy');

route::get('/kategori_pengumuman', 'kategori_pengumuman_controller@index')->name('kategori_pengumuman.index');
route::get('/kategori_pengumuman/create','kategori_pengumuman_controller@create')->name('kategori_pengumuman.create');
route::post('/kategori_pengumuman','kategori_pengumuman_controller@store')->name('kategori_pengumuman.store');
route::get('/kategori_pengumuman/{id}', 'kategori_pengumuman_controller@show')->name('kategori_pengumuman.show');
route::get('/kategori_pengumuman/{id}/edit', 'kategori_pengumuman_controller@edit')->name('kategori_pengumuman.edit');
route::patch('/kategori_pengumuman/{id}','kategori_pengumuman_controller@update')->name('kategori_pengumuman.update');
route::delete('/kategori_pengumuman/{id}','kategori_pengumuman_controller@destroy')->name('kategori_pengumuman.destroy');

Route::get('/pengumuman', 'pengumuman_controller@index')->name('pengumuman.index');
Route::get('/pengumuman/create', 'pengumuman_controller@create')->name('pengumuman.create');
Route::post('/pengumuman', 'pengumuman_controller@store')->name('pengumuman.store');
Route::get('/pengumuman/{id}', 'pengumuman_controller@show')->name('pengumuman.show');
route::get('/pengumuman/{id}/edit', 'pengumuman_controller@edit')->name('pengumuman.edit');
route::patch('/pengumuman/{id}','pengumuman_controller@update')->name('pengumuman.update');
route::delete('/pengumuman/{id}','pengumuman_controller@destroy')->name('pengumuman.destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
