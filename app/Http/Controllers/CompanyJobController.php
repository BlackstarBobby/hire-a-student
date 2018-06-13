<?php

namespace App\Http\Controllers;

use App\Models\CompanyJob;
use Illuminate\Http\Request;

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
     */
    public function list(Request $request)
    {
        $data = [];

        if ($request->ajax()) {
            dd($request->all());


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
}
