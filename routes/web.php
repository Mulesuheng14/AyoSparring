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

// ROUTE FOR GUEST
Route::get('/', 'GuestController@index');
Route::get('/login', 'GuestController@login');
Route::post('/login/submit', 'GuestController@loginSubmit');
Route::get('/register/user', 'GuestController@registerUser');
Route::get('/register/venue', 'GuestController@registerVenue');
Route::post('/register/user/submit', 'GuestController@registerUserSubmit');
Route::post('/register/venue/submit', 'GuestController@registerVenueSubmit');

// ROUTE FOR USER
Route::get('/user/dashboard', 'UserController@index');

// ROUTE FOR VENUE
Route::get('/venue/dashboard', 'VenueController@index');

// ROUTE FOR ADMIN
Route::get('/admin/dashboard', 'AdminController@index');
