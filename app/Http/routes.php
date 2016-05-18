<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
    /*
    * Apply MultiTenant Trait 
    *
    */
    
    Route::get('/login', 'Auth\AuthController@login');
    Route::get('/register', 'Auth\AuthController@register');
    Route::get('/logout', 'Auth\AuthController@logout');
        
    Route::get('/', 'WelcomeController@index');
    Route::get('welcome', 'WelcomeController@index');

    Route::controllers([
    	'auth' => 'Auth\AuthController',
    	'password' => 'Auth\PasswordController',
    ]);
               
  
    Route::group(array('before' => 'auth'), function() 
        {
        
        Route::get('home', 'HomeController@index');         

        Route::get('/reporting', ['uses' =>'ReportController@index', 'as' => 'Report']);
        Route::post('/reporting', ['uses' =>'ReportController@post']);
        
        Route::get('/profile', 'UserController@profile');
        
        Route::get('/workorders', 'WoController@index');
    
        Route::get('/assets', 'AssetController@index');
        Route::get('/assets/ajax/{id}', 'AssetController@ajax_show');
        Route::get('/assets/{id}', 'AssetController@show');
        Route::post('/assets/update/{id}', 'AssetsController@update');

        Route::get('/items', 'ItemController@index');
        Route::get('/items/ajax/{id}', 'ItemController@ajax_show');
        Route::get('/items/{id}', 'ItemController@show');
        Route::post('/items/update/{id}', 'ItemController@update');

        Route::get('/users', 'UserController@index');
        Route::get('/users/ajax/{id}', 'UserController@ajax_show');
        Route::get('/users/{id}', 'UserController@show');
        Route::post('/users/update/{id}', 'UserController@update');        
        });