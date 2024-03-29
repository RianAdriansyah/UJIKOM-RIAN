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

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'backend', 'middleware' => ['auth', 'role:admin']], function(){
    Route::get('/', function(){
        return 'hallo Admin';
    });
    Route::get('/home', function(){
        return view('home');
    });
    Route::resource('user', 'UserController');
    Route::resource('poliklinik', 'PoliklinikController');
    Route::resource('obat', 'ObatController');
    Route::resource('tindakan', 'TindakanController');
    Route::resource('pasien', 'PasienController');
    Route::resource('kunjungan', 'KunjunganController');
    Route::resource('rekammedis', 'RekammedisController');
    Route::resource('dokter', 'DokterController');
    Route::resource('lab', 'LabController');
});

Route::get('/member', function(){
    return 'hallo Member';
});
