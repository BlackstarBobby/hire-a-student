<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 17-Jun-18
 * Time: 13:48
 */

Route::group(['middleware' => 'auth'], function () {
    Route::get('/candidates', [
        'as' => 'candidates.list',
        'uses' => 'CandidatesController@list'
    ]);
});