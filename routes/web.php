<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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


Route::get('/test', function () {
dd('hello');
});

Route::get('test2', function (Illuminate\Session\Store $session) {
    dd($session->get('user_id'));
    return $session->get('user_id');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
