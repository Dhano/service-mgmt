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


Auth::routes();



Route::middleware(['auth'])->group(function () {
//    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

    Route::redirect('/', '/dashboard');
    Route::get('/', 'DashboardController@index');

    Route::resource('/admin/services', 'ServiceController');
});
