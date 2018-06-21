<?php
/**
 * Created by PhpStorm.
 * User: bfurniga
 * Date: 06/06/2018
 * Time: 10:47
 */

Route::group(['middleware' => 'auth'], function () {

    Route::get('/job/{companyJob}', [
        'as' => 'job.index',
        'uses' => 'CompanyJobController@index'
    ]);

    Route::get('/jobs', [
        'as' => 'job.list',
        'uses' => 'CompanyJobController@list'
    ]);

    Route::get('/jobs/new', [
        'as' => 'job.new',
        'uses' => 'CompanyJobController@newJob'
    ]);

    Route::post('/jobs/create', [
        'as' => 'job.create',
        'uses' => 'CompanyJobController@create'
    ]);

    Route::get('/jobs/edit/{companyJob}', [
        'as' => 'job.edit',
        'uses' => 'CompanyJobController@edit'
    ]);

    Route::post('/jobs/update/{companyJob}', [
        'as' => 'job.update',
        'uses' => 'CompanyJobController@update'
    ]);

    Route::get('/jobs/administrate', [
        'as' => 'job.administrate',
        'uses' => 'CompanyJobController@administrate'
    ]);


    Route::get('/jobs/application', [
        'as' => 'job.application',
        'uses' => 'CompanyJobController@application'
    ]);
});