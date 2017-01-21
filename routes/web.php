<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('daftar', 'daftarPenghuni@index');

Route::post('masukData', 'daftarPenghuni@store');

Route::get('cari', 'IndexController@cari');

Route::get('pencarian', 'searchController@index');

Route::get('filter', 'filterController@index');

Route::get('maklumat_penghuni/{penghuni_id}', 'daftarPenghuni@show');

Route::get('edit_penghuni/{penghuni_id}', 'daftarPenghuni@edit');

Route::patch('update_penghuni/{penghuni_id}', 'daftarPenghuni@update');

// Route::get('update_penghuni/{penghuni_id}', 'daftarPenghuni@update');

Route::get('insert', 'penghuni_controller@insert_data');

Route::get('daftarBerjaya', 'IndexController@daftarBerjaya');