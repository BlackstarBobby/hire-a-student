<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 21-Apr-18
 * Time: 19:43
 */


use App\Models\User;
use Spatie\Permission\Models\Role;

Route::get('/test', function () {

    $job = \App\Models\CompanyJob::find(1);
    dd($job->company);

//    $company = new \App\Models\Company();
//    $company->company_name = 'TestCompany No.2';
//    $company->description = 'Just another test';
//    $company->user_id = \Illuminate\Support\Facades\Auth::id();
//
//    $company->save();
//
//
////    $company = \App\Models\Company::find(1);
//    $user = \Illuminate\Support\Facades\Auth::user();
//    $user->company()->save($company);
//
//    dd($user->company);

    $faker = \Faker\Factory::create();

    dd(
        User::find(200)->company
    );

//
    die;
});