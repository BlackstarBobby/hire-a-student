<?php
/**
 * Created by PhpStorm.
 * User: 123Bl
 * Date: 21-Apr-18
 * Time: 19:43
 */


use App\User;
use Spatie\Permission\Models\Role;

Route::get('/test', function () {

    $user = \Illuminate\Support\Facades\Auth::user();
//    $resumeStruc = \App\Models\Resume::getResumeStructure();
//
//    $resumeStruc['value']['basic']['first_name'] = 'Bobby';
//    $resumeStruc['value']['basic']['last_name'] = 'Bob';
//
//    $resume = new \App\Models\Resume();
//
//    $resume->user_id = \Illuminate\Support\Facades\Auth::id();
//    $resume->resume = json_encode($resumeStruc);
//    $check = $resume->save();
    dd($user->resume);

//    dd($user->syncRoles('candidate'));
//
    die;
});