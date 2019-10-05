<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'ticket'], function () {
    Route::get('/index', 'TicketController@index');
    Route::get('/create', 'TicketController@create');    
    Route::post('/store', 'TicketController@store');
    Route::get('/show/{id}', 'TicketController@show');
    Route::get('/edit/{id}', 'TicketController@edit');
    Route::post('/edit/{id}', 'TicketController@update');
    Route::delete('/delete/{id}', 'TicketController@destroy');
});

Route::group(['prefix' => 'ticket-category'], function () {
    Route::get('/index', 'TicketCategoryController@index');
    Route::get('/create', 'TicketCategoryController@create');   
    Route::post('/store', 'TicketCategoryController@store');       
    Route::get('/show/{id}', 'TicketCategoryController@show');
    Route::get('/edit/{id}', 'TicketCategoryController@edit');
    Route::post('/edit/{id}', 'TicketCategoryController@updateS');
    Route::delete('/delete/{id}', 'TicketCategoryController@destroy');
});

Route::group(['prefix' => 'ticket-sub-category'], function () {
    Route::get('/index', 'TicketSubCategoryController@index');
    Route::get('/create', 'TicketSubCategoryController@create');    
    Route::post('/create', 'TicketSubCategoryController@store');      
    Route::get('/show/{id}', 'TicketSubCategoryController@show');
    Route::get('/edit/{id}', 'TicketSubCategoryController@edit');
    Route::post('/edit/{id}', 'TicketSubCategoryController@updateS');
    Route::delete('/delete/{id}', 'TicketSubCategoryController@destroy');
});