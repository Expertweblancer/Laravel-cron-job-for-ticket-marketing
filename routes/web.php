<?php
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/', 'WelcomeController');
Route::post('/contact', function(Request $request){
    // Mail::send(new ContactMail($request));
    Mail::to('ticketdropper23@gmail.com')->send(new ContactMail($request));

    echo ('Your message has been sent. Thank you!');
    // return redirect('/');
})->name('contact');

Route::post('subscribe', function(Request $request){
    return redirect('/');
    
})->name('subscribe');

Auth::routes();
    Route::resource('ticket','TicketsController');
    Route::resource('upcoming-festivals', 'UpcomeController');
    Route::resource('ticketweb', 'TicketwebController');
    Route::resource('etix', 'EtixController');
    Route::resource('eventbrite', 'EventbriteController');
    Route::resource('selectaseat', 'SelectaseatController');
    Route::resource('ticket-business', 'TicketbusinessController');
    Route::resource('user-ticket', 'UserticketController');
    Route::resource('statistics', 'StatisticsController');
    Route::resource('email', 'EmailController');

    Route::get('/search', 'SearchController@index')->name('mainsearch');
    Route::post('/search', 'SearchController@search')->name('search');
    Route::post('/business_search', 'TicketbusinessController@search')->name('business_search');

    Route::get('/construction', function(){
        return view('pages.construction');
    })->name('construction');
    Route::get('/map', function(){
        return view('pages.map');
    })->name('map');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/cryptocurrency', function(){
        return view('pages.cryptocurrency');
    })->name('cryptocurrency');
    
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
        
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});