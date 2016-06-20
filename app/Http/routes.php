<?php


Route::get('/', 'webController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('/daftarulang','sekolahCtrl@daftar_ulang');
Route::get('/admin','adminCtrl@index');
Route::post('/add_tim','timCtrl@add');
Route::get('/delete_tim/{key}','timCtrl@delete');
Route::get('/tim/{key}','timCtrl@one');
Route::get('/tim','timCtrl@index');
Route::get('/sekolah','sekolahCtrl@index');