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
    return view('menu');
})->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['guest']], function () {
    Route::get('/inicio', 'Auth\LoginController@showLoginForm')->name('inicio');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/login', 'Auth\LoginController@login')->name('login');
    
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
    Route::get('/main', function () {
        return view('plantilla/home');    })->name('main');    
    
    Route::get('/personas','IdentificadorController@index');
    Route::get('/usuraio','IdentificadorController@usuario');
    
});

