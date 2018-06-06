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
}
