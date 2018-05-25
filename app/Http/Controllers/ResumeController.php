<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $resume = Resume::select(['resume'])
            ->where('user_id', Auth::id())
            ->first();
        $data['resume'] = json_decode($resume->resume);

        return view('resume.edit', $data);
    }

    /**
     * @param ResumeRequest $request
     */
    public function update(ResumeRequest $request)
    {
        http_response_code(500);
        dump($request);
        dd($request);
    }


}
