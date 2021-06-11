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
    return view('auth.login');
});

Auth::routes();

// Dashboard
Route::get('/home', 'HomeController@index')->name('home');


// Patient
Route::resource('patient', 'PatientController');

// Patient
Route::resource('users', 'UsersController');
Route::post('/compte', 'UsersController@compte');
Route::post('/search', 'HomeController@searchCertificat')->name('search');
