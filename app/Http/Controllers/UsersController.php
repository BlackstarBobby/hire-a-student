<?php

namespace App\Http\Controllers;

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
