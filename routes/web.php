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
    return view('welcome');
});

Route::get('/borwita', 'Controller@index');
Route::get('/login', 'Controller@login');
Route::get('/lists', 'Controller@lists');
Route::get('/lists_pelanggan', 'Controller@lists_pelanggan');
Route::get('/lists_barang', 'Controller@lists_barang');
Route::get('/lists_barang_combobox', 'Controller@lists_barang_combobox');
Route::get('/lists_kode_supplier', 'Controller@lists_kode_supplier');
Route::get('/lists_supplier', 'Controller@lists_supplier');
Route::get('/lists_pembelian','Controller@lists_pembelian');
Route::get('/lists_penjualan','Controller@lists_penjualan');
Route::get('/lists_kode_pelanggan', 'Controller@lists_kode_pelanggan');
Route::get('/lists_penjualan_forecasting','Controller@lists_penjualan_forecasting');

Route::post('/awal_akhir_bulan', 'Controller@awal_akhir_bulan');

Route::get('/hapus_session','Controller@hapus_session');

Route::post('login_form', 'Controller@proses_login');
Route::post('create_or_update_user', 'Controller@create_or_update_user');
Route::post('delete', 'Controller@delete');
Route::post('get_user', 'Controller@get_user');

Route::post('create_or_update_pelanggan', 'Controller@create_or_update_pelanggan');
Route::post('get_pelanggan', 'Controller@get_pelanggan');
Route::post('delete_pelanggan', 'Controller@delete_pelanggan');

Route::post('create_or_update_barang', 'Controller@create_or_update_barang');
Route::post('get_barang', 'Controller@get_barang');
Route::post('delete_barang', 'Controller@delete_barang');

Route::post('create_or_update_pembelian', 'Controller@create_or_update_pembelian');
Route::post('get_pembelian', 'Controller@get_pembelian');
Route::post('delete_pembelian', 'Controller@delete_pembelian');

Route::post('create_or_update_supplier', 'Controller@create_or_update_supplier');
Route::post('get_supplier', 'Controller@get_supplier');

Route::post('create_or_update_penjualan', 'Controller@create_or_update_penjualan');
Route::post('get_penjualan','Controller@get_penjualan');


