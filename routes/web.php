<?php

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
    return view('layouts.master');
});

Route::get('/proyek', function () {
    return view('layouts.master');
});

Route::get('/items/create', 'perusahaan@create'); // menampilkan halaman form
Route::post('/items', 'perusahaan@store'); // menyimpan data
Route::get('/items', 'perusahaan@index'); // menampilkan semua
Route::get('/items/{id}', 'perusahaan@show'); // menampilkan detail item dengan id 
Route::get('/items/{id}/edit', 'perusahaan@edit'); // menampilkan form untuk edit item
Route::put('/items/{id}', 'perusahaan@update'); // menyimpan perubahan dari form edit
Route::delete('/items/{id}', 'perusahaan@destroy'); // menghapus data dengan id