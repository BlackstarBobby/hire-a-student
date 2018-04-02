<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 13-Mar-18
 * Time: 21:30
 */

Route::post('user/store', [
    'as' => 'user.store',
    'uses' => 'UsersController@store'
]);
