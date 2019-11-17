<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyJob;
use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{

    public function index(Request $request)
    {
        $data = [];

        $data['jobs'] = CompanyJob::orderBy('created_at', 'desc')
            ->with('company')
            ->limit(10)
            ->get();

        $data['totalJobs'] = CompanyJob::all()->count();
        $data['totalResumes'] = Resume::all()->count();
        $data['totalUsers'] = User::all()->count();
        $data['totalCompanies'] = Company::all()->count();

        return view('landing_page.index', $data);
    }

    public function login(Request $request)
    {


        return view('auth.login');
    }

    public function register(Request $request)
    {


        return view('auth.register');
    }
}
