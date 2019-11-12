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
Route::get('/halamanpertama', function () {
    return view('pagesatu');
});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/halamantambah', 'DashboardController@tambah');
Route::resource('/tes', 'TesController');
Route::resource('/kategori', 'KategoriController');
Route::resource('/produk', 'ProdukController');














// Route::get('/dashboard', function () {
//     return view('dashboard');
// });