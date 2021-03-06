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
    return redirect('login');
});

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/dashboard/soldier', 'DashboardController@getDataSoldier');
    Route::get('/dashboard/soldier/detail/{id}', 'DashboardController@getSoldierDetail');
    Route::get('/dashboard/soldier/chart/{id}', 'DashboardController@getSoldierChart');
    Route::get('/dashboard/soldier/map', 'DashboardController@getSoldierPositions');
    Route::get('/dashboard/soldier/center-map', 'DashboardController@getCenterMap');
});
