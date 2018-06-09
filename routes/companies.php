<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 01-Jun-18
 * Time: 15:26
 */

Route::get('/companies', [
    'as' => 'companies.list',
    'uses' => 'CompaniesController@list'
]);

Route::get('/companies/{company}', [
    'as' => 'companies.index',
    'uses' => 'CompaniesController@index'
]);

Route::get('/company/edit/{company}', [
    'as' => 'companies.edit',
    'uses' => 'CompaniesController@edit'
]);

Route::post('/company/update/{company}', [
    'as' => 'companies.update',
    'uses' => 'CompaniesController@update'
]);

