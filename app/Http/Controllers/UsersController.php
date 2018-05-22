<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $data = [];

        return view('profile.index', $data);
    }

    public function edit()
    {
        $data = [];

        return view('profile.edit', $data);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
