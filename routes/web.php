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


// Pages Routes link Start
    Route::get('/', 'PagesController@index');
    Route::get('/about','PagesController@about');
    Route::get('/services', 'PagesController@services');
// Pages Routes link End

// Posts Route link using artisan command start
    Route::resource('posts', 'PostsController');
// Posts Controller link using artisan command end


// Auth Route Links Start
    Auth::routes();
    Route::get('/dashboard', 'DashboardController@index');
// Auth Route Links End

