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
    return view('welcome');
});

Route::get('/o-nas', function (){
    return view('aboutus');
});

Route::get('/kontakt', function () {

    return view('contact');
});

Route::post('/kontakt', function () {

    return view('contact');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/kupbilet', 'BuyTicketController@create')->name('buyticket');

Route::post('/szukajbilet', 'BuyTicketController@show');

Route::post('/kupiony', 'BuyTicketController@store');

Route::get('/historia', 'HistoryTicketController@index')->name('history');

Route::get('/profil', 'UserController@index')->name('edit');

Route::post('/profil', 'UserController@store');




