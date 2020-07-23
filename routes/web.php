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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@index')->name('contactIndex')->middleware('auth');
Route::post('/contact', 'ContactController@store')->name('contact.store')->middleware('auth');

Route::get('/payment', 'PayMentController@create')->name('payment.create')->middleware('auth');
Route::post('/payment', 'PayMentController@store')->name('payment.store')->middleware('auth');

Route::get('/notifications', 'UserNotificationsController@show')->name('notifications.show')->middleware('auth');

// ------------------- ...... ..............................................
Route::get('/conversations', 'ConversationController@index');
Route::get('/conversations/{conversation}', 'ConversationController@show')->middleware('can:view,conversation');

Route::post('best-replies/{reply}', 'ConversationBestReplyController@store');


