<?php

namespace App\Http\Controllers;

use App\Models\CompanyJob;
use App\Student\Search\Filters\Filter;
use App\Student\Search\JobsSearch;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

/**
 * Class CompanyJobController
 * @package App\Http\Controllers
 */
class CompanyJobController extends Controller
{
    /**
     * @param CompanyJob $companyJob
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(CompanyJob $companyJob, Request $request)
    {
        $data = [];

        $data['job'] = $companyJob;

        return view('jobs.index', $data);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Throwable
     */
    public function list(Request $request)
    {
        $data = [];

        if ($request->ajax()) {
            $filters = $request->only([
                'keywords',
                'jobType',
                'salary'
            ]);

            if (isset($filters['keywords'])) {
                $filters['keywords'] = explode(' ', $filters['keywords']);
            }

            $request->merge($filters);
            $data['jobs'] = JobsSearch::apply($request);
            return view('jobs.list.jobs', $data)->render();
        }

        $data['jobs'] = CompanyJob::paginate(10);
        $data['jobTypes'] = CompanyJob::jobTypes();

        return view('jobs.list.list', $data);
    }

    /**Returns the view with empty fields
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newJob(Request $request)
    {
        $data = [];

        $data['jobTypes'] = CompanyJob::jobTypes();

        return view('jobs.edit', $data);
    }

    /**Saves a new job instance
     * @param Request $request
     */
    public function create(Request $request)
    {
    }

    public function edit(CompanyJob $companyJob, Request $request)
    {
    }

    public function update(CompanyJob $companyJob, Request $request)
    {
    }

    public function administrate()
    {
        $data = [];

        $company = Auth::user()->company;
        $data['jobs'] = CompanyJob::with('applicants')
            ->where('company_id', $company->id)
            ->get();

        $data['jobTypes'] = CompanyJob::JobTypes();

//        dd($data);

        return view('jobs.administrate', $data);
    }

    public function application()
    {
        $data = [];
        $data['applications'] = null;

        $user = Auth::user();

        if (Auth::user()->hasRole('candidate')) {
            $data['applications'] = CompanyJob::whereHas(
                'applicants',
                function ($subQuery) {
                    $subQuery->where('user_id', '=', Auth::id());
                }
            )->with('company')->get();

            $data['jobTypes'] = CompanyJob::jobTypes();
        } elseif (Auth::user()->hasRole('employer')) {
            $applications = CompanyJob::where('company_id', $user->company->id)->with('applicants')->get();

            $data['applications'] = $applications;
        }

        return view('jobs.applications.applications', $data);
    }
}
