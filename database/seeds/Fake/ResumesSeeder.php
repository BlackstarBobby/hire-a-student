<?php

use Illuminate\Database\Seeder;

class ResumesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $users = \App\Models\User::where('employer', false)
            ->get();

        $resumes = collect();

        foreach ($users as $user) {
            $resume = [

                'basic' => [
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'title' => $faker->jobTitle,
                    'phone' => $faker->phoneNumber,
                    'date_of_birth' => $faker->date('d-m-Y'),
                    'address' => $faker->streetAddress
                ],
                'description' => $faker->paragraphs(20, 1),
                'education' => [
                    'school' => [
                        'institution' => 'Facultatea de Matematica si Informatica, Universitatea din Bucuresti',
                        'diploma' => 'Diploma de licenta',
                        'study_field' => 'Computer Science',
                        'notes' => '',
                        'description' => '',
                        'start_year' => '2015',
                        'end_year' => '2018'
                    ]
                ],
                'experience' => [
                    'job' => [
                        'title' => 'Software Engineer',
                        'company' => $faker->company,
                        'location' => $faker->streetAddress,
                        'description' => 'Dezvoltare aplicatii software',
                        'start_date' => '2016',
                        'end_date' => 'prezent'
                    ]
                ],
                'abilities' => [

                ]
            ];


            $resumes->push([
                'user_id' => $user->id,
                'resume' => json_encode($resume)
            ]);
        }

        $groups = $resumes->split($users->count() / 1000);

        foreach ($groups as $group) {
            \Illuminate\Support\Facades\DB::table('resumes')
                ->insert($group->toArray());
        }
    }
}
