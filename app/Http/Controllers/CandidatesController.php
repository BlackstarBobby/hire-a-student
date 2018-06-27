<?php

namespace App\Http\Controllers;

use App\Models\CompanyJob;
use App\Models\Resume;
use App\Models\User;
use App\Student\Search\CandidatesSearch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatesController extends Controller
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
                'abilities',
                'candidateJobType',
                'address',
                'page'
            ]);

            if (isset($filters['abilities'])) {
                $filters['abilities'] = explode(' ', $filters['abilities']);
            }
            if (isset($filters['address'])) {
                $filters['address'] = explode(' ', $filters['address']);
            }

            $request->merge($filters);
            $data['candidates'] = CandidatesSearch::apply($request);
            return view('candidates.list.candidates', $data)->render();
        }

        $usersWithResume = DB::table('resumes')->select(['user_id'])->pluck('user_id');

        $data['candidates'] = User::with('resume')
            ->where('employer', false)
            ->whereIn('id', $usersWithResume)
            ->paginate(10);

        $data['jobTypes'] = CompanyJob::jobTypes();


        return view('candidates.list.list', $data);
    }
}
