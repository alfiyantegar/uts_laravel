<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'App\Http\Controllers\KependudukanController@index');
Route::get('/kependudukan', 'App\Http\Controllers\KependudukanController@tampil');
Route::get('/tambah', 'App\Http\Controllers\KependudukanController@tambah');
Route::get('/kependudukan/ubah/{nik}', 'App\Http\Controllers\KependudukanController@ubah');
Route::get('/hapus/{nik}', 'App\Http\Controllers\KependudukanController@hapus');
Route::get('/kependudukan/cetak_pdf', 'App\Http\Controllers\KependudukanController@cetak_pdf');
Route::get('/kependudukan/export_excel', 'App\Http\Controllers\KependudukanController@export_excel');
Route::get('/session/tampil', 'App\Http\Controllers\SessionController@tampilkanSession');
Route::get('/session/buat', 'App\Http\Controllers\SessionController@buatSession');
Route::get('/session/hapus', 'App\Http\Controllers\SessionController@hapusSession');

Route::post('/kependudukan/store','App\Http\Controllers\KependudukanController@simpan');
Route::post('/kependudukan/edit','App\Http\Controllers\KependudukanController@edit');

