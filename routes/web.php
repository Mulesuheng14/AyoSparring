<?php

use Illuminate\Support\Facades\Auth;
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

// Authentication Routes...
Auth::routes(['register' => false]); // Set route register in auth laravel is false
Route::get('register/user', 'Auth\RegisterController@registerUser');
Route::get('register/venue', 'Auth\RegisterController@registerVenue');
Route::post('register/user/submit', 'Auth\RegisterController@registerUserSubmit');
Route::post('register/venue/submit', 'Auth\RegisterController@registerVenueSubmit');

// ROUTE FOR GUEST
Route::get('/', 'GuestController@index');
Route::get('login', 'GuestController@login');
Route::post('login/submit', 'GuestController@loginSubmit');

// ROUTE FOR USER
Route::get('/user/dashboard', 'UserController@index');

// ROUTE FOR VENUE
Route::get('/venue/dashboard', 'VenueController@index');

// ROUTE FOR ADMIN
Route::get('/admin/dashboard', 'AdminController@index');
