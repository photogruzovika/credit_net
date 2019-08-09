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

Route::get('/', 'HomeController@index');
Route::get('/money', function(){
    return view('money');
});
Route::get('/checking', 'CheckingController@index');
Route::get('/choose', 'SumController@index');
Route::post('/ajax/save_sum', 'SumController@save_sum');
Route::post('/ajax/save_from', 'WhereController@save_from');
Route::get('/sms', 'SmsController@index');
Route::get('/update_sms', 'SmsController@update_sms');
Route::get('/from', 'WhereController@index');
Route::get('/reference', 'ReferenceController@index');
Route::get('/author', 'HomeController@reg');
Route::post('/check_sms', 'SmsController@accept');

Route::get('/history', function(){
    return view('history');
});
Route::get('/rate', function(){
    return view('rate');
});
Route::post('/ajax/add_email', 'HomeController@add_email');
Route::post('/ajax/add_review', 'HomeController@add_review');
