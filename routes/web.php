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
    return view('welcome');
});

Auth::routes();
    Route::resource('ticket','TicketsController');
    Route::resource('upcoming-festivals', 'UpcomeController');
    Route::resource('ticketweb', 'TicketwebController');
    Route::resource('etix', 'EtixController');
    Route::resource('eventbrite', 'EventbriteController');
    Route::resource('selectaseat', 'SelectaseatController');
    Route::resource('ticket-business', 'TicketbusinessController');

    Route::get('/home', 'HomeController@index')->name('home');
    // Route::get('/ticket', 'TicketController@index')->name('ticket');
    Route::get('/inbox', function(){
        return view('inbox');})->name('inbox');
    Route::get('/chat', function(){
        return view('chat');
    })->name('chat');
 
    Route::get('/calendar', function(){
        return view('pages.calendar');
    })->name('calendar');

    Route::get('/maintenance', function(){
        return view('pages.maintenance');
    })->name('maintenance');

    Route::get('/error', function(){
        return view('pages.error');
    })->name('error');

    Route::get('/comingsoon', function(){
        return view('pages.comingsoon');
    })->name('comingsoon');

    Route::get('/user_profile', function(){
        return view('pages.profile');
    })->name('user_profile');

    Route::get('/invoice', function(){
        return view('pages.invoice');
    })->name('invoice');

    Route::get('/gallery', function(){
        return view('pages.gallery');
    })->name('gallery');
        
