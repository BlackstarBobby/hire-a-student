<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class ResumeController
 * @package App\Http\Controllers
 */
class ResumeController extends Controller
{

    public function profile(User $user, Request $request)
    {
        $data = [];

        $data['resume'] = Resume::with('user')
            ->where('user_id', $user->id)
            ->first();

        //todo add escape if user does not have resume

        return view('resume.index', $data);
    }

    /**
     *
     */
    public function index()
    {
        $data = [];

        $data['resume'] = Resume::with('user')
            ->where('user_id', Auth::id())
            ->first();

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

        $data['user'] = Auth::user();
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
