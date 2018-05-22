<?php
/**
 * Created by PhpStorm.
 * User: bfurniga
 * Date: 14/05/2018
 * Time: 20:54
 */

Route::get('/resume', [
    'as' => 'resume',
    'uses' => 'ResumeController@index'
]);

Route::get('/resume/edit', [
    'as' => 'resume.edit',
    'uses' => 'ResumeController@edit'
]);

Route::post('/resume/update', [
    'as' => 'resume.update',
    'uses' => 'ResumeController@update'
]);