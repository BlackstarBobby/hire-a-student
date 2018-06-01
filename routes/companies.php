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

Route::get('/company/{company}', [
    'as' => 'companies.index',
    'uses' => 'CompaniesController@index'
]);