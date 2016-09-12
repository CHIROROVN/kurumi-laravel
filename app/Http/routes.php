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
    Route::get('/contact', ['as' => 'frontend.contact.index', 'uses' => 'ContactController@getIndex']);
    Route::post('/contact', ['as' => 'frontend.contact.index', 'uses' => 'ContactController@postIndex']);
    Route::get('/contact/confirm', ['as' => 'frontend.contact.confirm', 'uses' => 'ContactController@getConfirm']);
    Route::get('/contact/send', ['as' => 'frontend.contact.send', 'uses' => 'ContactController@getSend']);
    Route::get('/contact/back', ['as' => 'frontend.contact.back', 'uses' => 'ContactController@getBack']);

    	//Order
	Route::get('order', ['as' => 'frontend.order.index', 'uses' => 'OrderController@index']);

	Route::get('order/new-cojp', ['as' => 'frontend.order.new_cojp_regist', 'uses' => 'OrderController@getNewCojp']);
	Route::post('order/new-cojp', ['as' => 'frontend.order.new_cojp_regist', 'uses' => 'OrderController@postNewCojp']);
	Route::get('order/new-cojp_confirm', ['as' => 'frontend.order.new_cojp_confirm', 'uses' => 'OrderController@getNewCojpCnf']);
	Route::get('order/new-cojp_sent', ['as' => 'frontend.order.new_cojp_sent', 'uses' => 'OrderController@getNewCojpSent']);

	//Plan
	Route::get('plan', ['as' => 'frontend.plan.index', 'uses' => 'PlanController@index']);
});



