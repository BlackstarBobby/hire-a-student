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

    $user = User::find(3);

    dd($user->resume());
//    dd($user->syncRoles('candidate'));
//
    die;
});