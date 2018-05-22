<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use Illuminate\Http\Request;

/**
 * Class ResumeController
 * @package App\Http\Controllers
 */
class ResumeController extends Controller
{
    /**
     *
     */
    public function index()
    {
        $data = [];


        return view('resume.index', $data);
    }

    /**
     *
     */
    public function store()
    {

    }

    /**
     *Returns the view with the edit fields of the resume
     */
    public function edit()
    {
        $data = [];

        return view('resume.edit', $data);
    }

    /**
     * @param ResumeRequest $request
     */
    public function update(ResumeRequest $request)
    {

        dd($request);

    }


}
