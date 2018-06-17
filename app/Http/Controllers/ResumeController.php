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

        $data['resume'] = Resume::where('user_id', Auth::id())->first();

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

        $data['resume'] = json_decode($resume->resume ?? null);

        return view('resume.edit', $data);
    }

    /**
     * @param ResumeRequest $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function update(ResumeRequest $request)
    {
        $resume = null;
        if ($request->has('value')) {
            $resume = $request->get('value');
        }

        if ($resume) {
            $userResume = Auth::user()->resume;

            if ($userResume) {
                $userResume->resume = json_encode($resume);
                $userResume->save();
            } else {
            }
        }

        return redirect()->route('resume');
    }
}
