<?php

use Illuminate\Support\Facades\Route;

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
    return view('Home');
});

Route::get('/dosen', function(){
    $nama = 'Budi Pekerti';
    $KodeDosen = 'D123';
    $MataKuliah = 'Web Programming';
    return view('dosen', compact('nama', 'KodeDosen', 'MataKuliah'));
});

Route::view('/about', 'about');