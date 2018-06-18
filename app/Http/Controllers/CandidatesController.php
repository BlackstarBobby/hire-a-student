<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CandidatesController extends Controller
{
    public function list(Request $request)
    {
        $data = [];

        $usersWithResume = DB::table('resumes')->select(['user_id'])->pluck('user_id');

        $data['candidates'] = User::with('resume')
            ->where('employer', false)
            ->whereIn('id', $usersWithResume)
            ->paginate(10);

//        dd($data);
        return view('candidates.list.list', $data);
    }
}
