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

Route::get('/','HomeController@index');

Route::post('activity',"HomeController@activity");

Route::post('upload',"HomeController@upload");

Route::post('subscribe',"HomeController@subscribe");

/*...*/

Route::group(['prefix' => 'dashboard','namespace'=>'Backend',],function (){

    Route::group([],function (){

        Route::get('login','Auth\AuthController@getLogin')->name('getLogin');

        Route::post('login','Auth\AuthController@postLogin')->name('postLogin');

        Route::get('logout','Auth\AuthController@getLogout')->name('logout');
    });

    Route::group(['middleware' => 'auth'],function (){

        Route::match(['get','post'],'/','HomeController@index');

        Route::post('/update-state','HomeController@updateState');
    });
});
