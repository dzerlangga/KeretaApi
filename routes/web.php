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
    return view('content.dashboard');
});

Route::get('/main', function () {
    return view('content.dashboard2');
});

Route::get('/input','input@data');

Route::post('/masuk', 'input@index');

// kereta
Route::get('/ker', 'ckereta@index');
Route::post('/pluskereta', 'ckereta@plus');
Route::post('/edit', 'ckereta@edit');
Route::get('/hapus', 'ckereta@hapus');
Route::get('/rangkaian', 'ckereta@rangkaian');


// 