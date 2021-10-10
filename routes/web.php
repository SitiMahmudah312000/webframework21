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
    return view('index');
});

Route::get('portpolio', function () {
    return view('portpolio');
});

Route::get('home', function () {
    return view('home');
});

Route::get('kesenian', function () {
    return view('kesenian');
});