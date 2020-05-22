<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('welcome/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }
    \Illuminate\Support\Facades\App::setLocale($locale);
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/staff', 'HomeController@staff')->name('staff');
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
Route::get('/book', 'HomeController@book')->name('book.form');
Route::post('/book', 'HomeController@bookStore')->name('book.store');

Route::group(['prefix' => '{type}'], function () {
    Route::resource('/users', 'UsersController');
});

Route::get('/medical-card', 'UsersController@card')->name('patient.card');

Route::get('/requests', 'RequestsController@index')->name('requests.index');
Route::get('/schedule', 'RequestsController@schedule')->name('requests.schedule');
Route::get('/requests/{id}', 'RequestsController@show')->name('requests.show');
Route::post('/{request_id}/record', 'RequestsController@record')->name('record.store');
