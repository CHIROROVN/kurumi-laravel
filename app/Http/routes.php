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
    //New JP
    Route::get('order/new-jp', ['as' => 'frontend.order.new_jp_regist', 'uses' => 'OrderController@getNewJp']);
    Route::post('order/new-jp', ['as' => 'frontend.order.new_jp_regist', 'uses' => 'OrderController@postNewJp']);
    Route::get('order/new-jp_confirm', ['as' => 'frontend.order.new_jp_confirm', 'uses' => 'OrderController@getNewJpCnf']);
    Route::get('order/new-jp_sent', ['as' => 'frontend.order.new_jp_sent', 'uses' => 'OrderController@getNewJpSent']);
    //New COM
    Route::get('order/new-com', ['as' => 'frontend.order.new-com_regist', 'uses' => 'OrderController@getNewCom']);
    Route::post('order/new-com', ['as' => 'frontend.order.new-com_regist', 'uses' => 'OrderController@postNewCom']);
    Route::get('order/new-com_confirm', ['as' => 'frontend.order.new-com_confirm', 'uses' => 'OrderController@getNewComCnf']);
    Route::get('order/new-jp_sent', ['as' => 'frontend.order.new-com_sent', 'uses' => 'OrderController@getNewComSent']);

    // move cojp
    Route::get('/order/move-cojp', ['as' => 'frontend.order.move_cojp.index', 'uses' => 'OrderController@getMoveCoJp']);
    Route::post('/order/move-cojp', ['as' => 'frontend.order.move_cojp.index', 'uses' => 'OrderController@postMoveCoJp']);
    Route::get('/order/move-cojp/confirm', ['as' => 'frontend.order.move_cojp.confirm', 'uses' => 'OrderController@getMoveCoJpCnf']);
    Route::get('/order/move-cojp/send', ['as' => 'frontend.order.move_cojp.send', 'uses' => 'OrderController@getMoveCoJpSent']);
    Route::get('/order/move-cojp/back', ['as' => 'frontend.order.move_cojp.back', 'uses' => 'OrderController@getMoveCoJpBack']);

    // move com
    Route::get('/order/move-com', ['as' => 'frontend.order.move_com.index', 'uses' => 'OrderController@getMoveCom']);
    Route::post('/order/move-com', ['as' => 'frontend.order.move_com.index', 'uses' => 'OrderController@postMoveCom']);
    Route::get('/order/move-com/confirm', ['as' => 'frontend.order.move_com.confirm', 'uses' => 'OrderController@getMoveComCnf']);
    Route::get('/order/move-com/send', ['as' => 'frontend.order.move_com.send', 'uses' => 'OrderController@getMoveComSent']);
    Route::get('/order/move-com/back', ['as' => 'frontend.order.move_com.back', 'uses' => 'OrderController@getMoveComBack']);

    // move jp
    Route::get('/order/move-jp', ['as' => 'frontend.order.move_jp.index', 'uses' => 'OrderController@getMoveJp']);
    Route::post('/order/move-jp', ['as' => 'frontend.order.move_jp.index', 'uses' => 'OrderController@postMoveJp']);
    Route::get('/order/move-jp/confirm', ['as' => 'frontend.order.move_jp.confirm', 'uses' => 'OrderController@getMoveJpCnf']);
    Route::get('/order/move-jp/send', ['as' => 'frontend.order.move_jp.send', 'uses' => 'OrderController@getMoveJpSent']);
    Route::get('/order/move-jp/back', ['as' => 'frontend.order.move_jp.back', 'uses' => 'OrderController@getMoveJpBack']);

	//Plan
	Route::get('plan', ['as' => 'frontend.plan.index', 'uses' => 'PlanController@index']);

    //Feature
    Route::get('feature', ['as' => 'frontend.feature.index', 'uses' => 'FeatureController@index']);
    //FAQ
    Route::get('faq', ['as' => 'frontend.faq.index', 'uses' => 'FaqController@index']);

});



