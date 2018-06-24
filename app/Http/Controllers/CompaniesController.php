<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Student\Search\CompaniesSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CompaniesController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     * @throws \Throwable
     */
    public function list(Request $request)
    {
        $data = [];

        if ($request->ajax()) {
            $filters = $request->only([
                'companySearch',
                'companyLetter'
            ]);

            if (isset($filters['companySearch'])) {
                $filters['companySearch'] = explode(' ', $filters['companySearch']);
            }

            $request->merge($filters);
            $data['companies'] = CompaniesSearch::apply($request);

            http_response_code(500);
            return view('companies.list.companies', $data)->render();
        }

        $companies = Company::select(['id', 'company_name', 'logo'])
            ->whereNotNull('company_name')
            ->whereNotNull('description')
            ->whereNotNull('location')
            ->paginate(15);

        $data['companies'] = $companies;

        return view('companies.list.list', $data);
    }

    public function profile(Request $request)
    {
        $data = [];

        $data['company'] = Auth::user()->company;

        return view('companies.index.index', $data);
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

//        dd($request);

        $savedFile = null;
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = snake_case($company->company_name) . '.' . $extension;
            $savedFile = $file->move(public_path('uploads/logos'), $filename);
            if ($savedFile) {
                $savedFile = 'uploads/logos/' . snake_case($savedFile->getFilename());
            }
        }

        $company = Auth::user()->company;
        //todo finish saving the request

        $updateData = [];
        if ($savedFile) {
            $updateData = array_merge($request->only([
                'company_name',
                'description',
//                'logo',
                'phone',
                'email',
                'website',
                'facebook',
                'twitter',
                'linkedin',
                'google_plus',
                'map'
            ]), ['logo' => $savedFile]);
        } else {
            $updateData = $request->only([
                'company_name',
                'description',
//                'logo',
                'phone',
                'email',
                'website',
                'facebook',
                'twitter',
                'linkedin',
                'google_plus',
                'map'
            ]);
        }

        if ($company) {
            $company->update($updateData);
            $company->save();
        }

        $data['company'] = Auth::user()->company;


//        return view('companies.index.index', $data);
        return redirect()->route('companies.profile');
    }
}
