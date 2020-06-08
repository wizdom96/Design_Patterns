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
    return view('welcome');
});

Route::get('/abstract-factory', function () {
    return view('abstract');
});

Route::get('builder', function () {
    return view('builder');
});
Route::get('factory', function () {
    return view('factory');
});
Route::get('prototype', function () {
    return view('prototype');
});

Route::get('simple', function () {
    return view('simple');
});

Route::get('singelton', function () {
    return view('singelton');
});


Route::get('static', function () {
    return view('static');
});

Route::get('adapter', function () {
    return view('adapter');
});

Route::get('composite', function () {
    return view('composite');
});

Route::get('dependency', function () {
    return view('dependency');
});

Route::get('decorator', function () {
    return view('decorator');
});