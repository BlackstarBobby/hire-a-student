<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResumeRequest;
use App\Models\CompanyJob;
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

        $data['res'] = $resume;
        $data['resume'] = json_decode($resume->resume ?? null);
        $data['jobTypes'] = CompanyJob::jobTypes();

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

        $savedFile = null;
        $user = Auth::user();
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = snake_case($user->first_name . '-' . $user->last_name . '' . $user->id) . '.' . $extension;
            $savedFile = $file->move(public_path('uploads/avatars'), $filename);
            if ($savedFile) {
                $savedFile = 'uploads/avatars/' . snake_case($savedFile->getFilename());
            }
        }

        if ($savedFile) {
            $user->update([
                'avatar' => $savedFile
            ]);
            $user->save();
        }

        if ($resume) {
            unset($resume['education']['school_replace']);
            unset($resume['experience']['job_replace']);

            $userResume = $user->resume;

            if ($userResume) {
                $userResume->resume = json_encode($resume);
                $userResume->save();
            } else {
            }
        }

        return redirect()->route('resume');
    }
}
