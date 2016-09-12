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

Route::group(['prefix' => '', 'namespace' => 'Frontend'], function () {
	Route::get('/', ['as' => 'frontend.index', 'uses' => 'HomeController@index']);

    // company
    Route::get('/company', ['as' => 'frontend.company.index', 'uses' => 'CompanyController@index']);

    // contact
    Route::get('/contact', ['as' => 'frontend.contact.index', 'uses' => 'ContactController@index']);
});



