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


// Basic Route
// Route dinggunakan untuk mengakses controler dan method kita

// Route::get('/', function () {
//     return view('index'); // membaca file view dan file index
// });

// Route::get('/about', function () {
//     $name = 'Nandes Simanjuntak'; // untuk membuat mengirim data menggunakan parameter
//     return view('about', ['name' => $name]); // membaca file view 
// });

// Untuk url
// Mengakses 2 controler dengan method berbeda
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/msproduct', 'MasterProductController@index');

// Canteens url
// Route::get('/mscanteens', 'MasterCanteensController@index'); //kiri=url, kanan=controller
// Route::get('/mscanteens/create', 'MasterCanteensController@create'); //kiri=url, kanan=controller
// Route::get('/mscanteens/{mscanteen}', 'MasterCanteensController@show'); //kiri=url, kanan=controller
// Route::post('/mscanteens', 'MasterCanteensController@store');
// Route::delete('/mscanteens/{mscanteen}', 'MasterCanteensController@destroy');
// Route::get('/mscanteens/{mscanteen}/edit', 'MasterCanteensController@edit');
// Route::patch('/mscanteens/{mscanteen}', 'MasterCanteensController@update');

// Simple plain
Route::resource('mscanteens', 'MasterCanteensController');