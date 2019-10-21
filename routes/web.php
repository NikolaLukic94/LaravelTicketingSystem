<?php

Route::any('/', 'HomeController@home');

Auth::routes();

Route::post('/search', 'SearchController@filter');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'ticket'], function () {
    Route::get('/index', 'TicketController@index');
    Route::post('/create', 'TicketController@store');
    Route::get('/show/{id}', 'TicketController@show');//modal
    Route::get('/edit/{id}', 'TicketController@edit');//modal
    Route::post('/edit/{id}', 'TicketController@update');
    Route::delete('/delete/{id}', 'TicketController@destroy');//modal
});

Route::get('my-profile', 'UserProfileController@index');


//Route::middleware(['admin'])->group(function () {

    Route::group(['prefix' => 'label'], function () {
        Route::get('/index', 'LabelController@index');   
        Route::post('/store', 'LabelController@store');       
        Route::get('/show/{id}', 'LabelController@show');
        Route::get('/edit/{id}', 'LabelController@edit');
        Route::post('/edit/{id}', 'LabelController@updateS');
        Route::delete('/delete/{id}', 'LabelController@destroy');
    });

    Route::group(['prefix' => 'ticket-sub-category'], function () {
        Route::get('/index', 'TicketSubCategoryController@index');  
        Route::post('/create', 'TicketSubCategoryController@store');      
        Route::get('/show/{id}', 'TicketSubCategoryController@show');
        Route::get('/edit/{id}', 'TicketSubCategoryController@edit');
        Route::post('/edit/{id}', 'TicketSubCategoryController@updateS');
        Route::delete('/delete/{id}', 'TicketSubCategoryController@destroy');
    });

    Route::group(['prefix' => 'ticket-category'], function () {
        Route::get('/index', 'TicketCategoryController@index');  
        Route::post('/store', 'TicketCategoryController@store');       
        Route::get('/show/{id}', 'TicketCategoryController@show');
        Route::get('/edit/{id}', 'TicketCategoryController@edit');
        Route::post('/edit/{id}', 'TicketCategoryController@updateS');
        Route::delete('/delete/{id}', 'TicketCategoryController@destroy');
    });

    Route::group(['prefix' => 'notification'], function () {
        Route::get('/index', 'TicketCategoryController@index');       
        Route::get('/show/{id}', 'TicketCategoryController@show');
        Route::post('/edit/{id}', 'TicketCategoryController@updateS');
        Route::delete('/delete/{id}', 'TicketCategoryController@destroy');
    });    

//});