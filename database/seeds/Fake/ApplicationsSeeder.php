<?php

use Illuminate\Database\Seeder;

class ApplicationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::where('employer', false)
            ->get();

        $jobs = \App\Models\CompanyJob::all();

        $insert = collect();

        foreach ($jobs as $job) {
            $rand = rand(5, 10);
            $usr = $users->random($rand);
            for ($i = 0; $i < $rand; $i++) {
                $insert->push([
                    'user_id' => $usr->get($i)->id,
                    'company_job_id' => $job->id
                ]);
            }
        }

        $groups = $insert->split($jobs->count() / 1000);

        foreach ($groups as $group) {
            \Illuminate\Support\Facades\DB::table('company_job_user')
                ->insert($group->toArray());
        }
    }
}