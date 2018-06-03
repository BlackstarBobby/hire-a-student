<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Company $company, Request $request)
    {
        $data = [];

        $data['company'] = Auth::user()->company;

        return view('companies.edit', $data);
    }

    public function update(Company $company, CompanyRequest $request)
    {
        $data = [];


        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $company->company_name . '.' . $extension;
            $file->move(public_path('uploads/logos'), $filename);
        }

        $company = Auth::user()->company;
        //todo finish saving the request
        if ($company) {
            $company->update(
                $request->only([
                    'company_name',
                //'description',
                    'logo',
                    'phone'
                ])
            );
        }

        $data['company'] = Auth::user()->company;


//        return view('companies.index.index', $data);
    }
}
