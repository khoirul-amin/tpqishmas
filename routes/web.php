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

Route::middleware('login2')->group(function () {
    Route::get('/', function () {
        return view('auth.welcome');
    });
    Route::get('/register', function () {
        return view('auth.register');
    });
});
Route::post('/login', 'LoginController@login');
Route::post('/register', 'LoginController@register');

// Auth::routes();

Route::middleware('login')->group(function () {
    Route::get('/home', function () {
        return view('admin.home');
    });
});
