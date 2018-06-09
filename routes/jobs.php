<?php
/**
 * Created by PhpStorm.
 * User: bfurniga
 * Date: 06/06/2018
 * Time: 10:47
 */

Route::get('/job/{companyJob}', [
    'as' => 'job.index',
    'uses' => 'CompanyJobController@index'
]);

Route::get('/jobs', [
    'as' => 'job.list',
    'uses' => 'CompanyJobController@list'
]);
