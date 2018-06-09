<?php

namespace App\Http\Controllers;

use App\Models\CompanyJob;
use Illuminate\Http\Request;

class CompanyJobController extends Controller
{
    public function index(CompanyJob $companyJob, Request $request)
    {
        $data = [];

        $data['job'] = $companyJob;

        return view('jobs.index', $data);
    }

    public function list(Request $request)
    {
        $data = [];

        $data['jobs'] = CompanyJob::paginate(10);

        return view('jobs.list.list', $data);
    }
}
