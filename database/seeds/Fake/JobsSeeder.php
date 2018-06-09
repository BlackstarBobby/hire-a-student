<?php

use Illuminate\Database\Seeder;

class JobsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $companies = \Illuminate\Support\Facades\DB::table('companies')
            ->select(['id'])
            ->pluck('id');

        $jobs = collect();

        $job_types = \App\Models\CompanyJob::getJobTypes();

        foreach ($companies as $company) {
            for ($i = 0; $i < rand(1, 10); $i++) {
                $jobs->push([
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                    'company_id' => $company,
                    'title' => $faker->jobTitle,
                    'description' => $faker->paragraphs(20, 1),
                    'job_type' => $job_types[array_rand($job_types)],
                    'salary' => rand(100, 10000) . '$',
                    'city' => 'Bucharest'
                ]);
            }
        }

        $groups = $jobs->split(1000);

        foreach ($groups as $group) {
            \Illuminate\Support\Facades\DB::table('company_jobs')
                ->insert($group->toArray());
        }
    }
}
