<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function list(Request $request)
    {
        $data = [];

        $companies = Company::select(['id', 'company_name', 'logo'])
            ->paginate(20);

        $data['companies'] = $companies;

//        dd($companies);

        return view('companies.list.list', $data);
    }

    public function index(Company $company, Request $request)
    {
        $data = [];

        $data['company'] = Company::findOrFail($company->id);

        return view('companies.index.index', $data);
    }
}
