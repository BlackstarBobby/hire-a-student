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

    dd(\App\Models\Resume::where('resume->job_type', '=', 20)->get());

    $resume =\Illuminate\Support\Facades\Auth::user()->resume;
    dd(json_decode($resume->resume));

//    $job = \App\Models\CompanyJob::where('id', 132)->with('applicants')->first();
//    dd($job->applicants);

//    dd(\Illuminate\Support\Facades\Auth::user()->assignRole('candidate'));
//    $faker = \Faker\Factory::create();
//    dd($faker->imageUrl($width = 640, $height = 480, 'abstract'));

    $user = \Illuminate\Support\Facades\Auth::user();
    dd($user->company->jobs->first()->applicants);

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