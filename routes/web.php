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

use App\Http\Controllers\TambahDeskripsiController;

Route::get('/', function () {
    return view('login');
});
/*Route::get('/halaman-kedua', function () {
    return view('halamandua');*/

/*Route::get('/home_user', 'User@index');*/
Route::get('/login', 'User@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/deskripsi', 'DeskripsiController@setjen');
Route::get('jumlah/grafik', 'JumlahController@grafik');
Route::get('/tambahdeskripsi', 'TambahDeskripsiController@index');
Route::post('/tambahdeskripsi/create', 'TambahDeskripsiController@createweb');
