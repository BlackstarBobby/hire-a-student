<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 13-Mar-18
 * Time: 21:30
 */


Route::group(['middleware' => 'auth'], function () {
    Route::get('/user', [
        'as' => 'user.index',
        'uses' => 'UsersController@index'
    ]);


    Route::get('/user/edit', [
        'as' => 'user.edit',
        'uses' => 'UsersController@edit'
    ]);

    Route::post('/user/update', [
        'as' => 'user.update',
        'uses' => 'UsersController@update'
    ]);
});
