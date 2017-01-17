<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'InvoicesController@index');
Route::get('/invoices/create', 'InvoicesController@create');
Route::get('/invoices/{id}/edit', 'InvoicesController@edit');
Route::post('/invoices', 'InvoicesController@store');
Route::patch('/invoices/{id}', 'InvoicesController@update');
