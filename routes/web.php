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

// ROUTE FOR GUEST
Route::get('/', 'GuestController@index');
Auth::routes(['register' => false]);
Route::get('register/user', 'Auth\RegisterController@registerUser');
Route::get('register/venue', 'Auth\RegisterController@registerVenue');
Route::post('register/user/submit', 'Auth\RegisterController@registerUserSubmit');
Route::post('register/venue/submit', 'Auth\RegisterController@registerVenueSubmit');
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login');
Route::get('home', 'HomeController@home');

// ROUTE FOR ADMIN
Route::group(['middleware' => ['role:1']], function () {
    Route::get('admin/dashboard', 'AdminController@index');
    Route::post('admin/dashboard/user/verifikasi/{status}', 'AdminController@verification');
    Route::post('admin/dashboard/user/block', 'AdminController@block');
});

// ROUTE FOR VENUE
Route::group(['middleware' => ['role:2']], function () {
    Route::get('venue/dashboard', 'VenueController@index');
    Route::post('venue/dashboard/response/booking/{status}', 'VenueController@responseBooking');
});

// ROUTE FOR USER
Route::group(['middleware' => ['role:3']], function () {
    Route::get('user/dashboard', 'UserController@index');
    Route::post('user/dashboard/response/sparring/{status}', 'UserController@responseSparring');
    Route::post('user/dashboard/request/sparring/', 'UserController@requestSparring');
    Route::post('user/dashboard/review/{status}', 'UserController@review');
});
