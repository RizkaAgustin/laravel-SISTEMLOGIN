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
Route::get('/deskripsiweb/{id_eselon}', 'DeskripsiController@eselon');
Route::get('/deskripsisi/{id_eselon}', 'DeskripsisiController@eselon');
Route::get('jumlah/grafik', 'JumlahController@grafik');
Route::get('/tambahdeskripsiweb/{id_eselon}', 'TambahDeskripsiController@index');
Route::get('/tambahdeskripsisi/{id_eselon}', 'TambahDeskripsisiController@index');
Route::post('/tambahdeskripsiweb/create', 'TambahDeskripsiController@createweb');
Route::post('/tambahdeskripsisi/create', 'TambahDeskripsisiController@createsi');
Route::get('/kategorisetjen', 'DeskripsiController@kategorisetjen');
Route::get('/kategoriitjen', 'DeskripsiController@kategoriitjen');
Route::get('/kategoripktl', 'DeskripsiController@kategoripktl');
Route::get('/kategoriksdae', 'DeskripsiController@kategoriksdae');
Route::get('/kategoripdashl', 'DeskripsiController@kategoripdashl');
Route::get('/kategoriphpl', 'DeskripsiController@kategoriphpl');
Route::get('/kategorippkl', 'DeskripsiController@kategorippkl');
Route::get('/kategoripslb3', 'DeskripsiController@kategoripslb3');
Route::get('/kategoriditjenppi', 'DeskripsiController@kategoriditjenppi');
Route::get('/kategoripskl', 'DeskripsiController@kategoripskl');
Route::get('/kategorigakkum', 'DeskripsiController@kategorigakkum');
Route::get('/kategoribp2sdm', 'DeskripsiController@kategoribp2sdm');
Route::get('/kategorilitbang', 'DeskripsiController@kategorilitbang');
Route::get('/deletedeskripsiweb/{id}/{id_eselon1}', 'TambahDeskripsiController@destroy');
Route::get('/deletedeskripsisi/{id}/{id_eselon1}', 'TambahDeskripsisiController@destroy');
Route::get('/editdeskripsiweb/{id_eselon}', 'DeskripsiController@edit');
Route::get('/editdeskripsisi/{id_eselon}', 'DeskripsisiController@edit');
Route::post('/updatedeskripsiweb/update', 'DeskripsiController@update');
Route::post('/updatedeskripsisi/update', 'DeskripsisiController@update');
