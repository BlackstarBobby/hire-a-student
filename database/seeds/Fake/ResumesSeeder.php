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
                        'type' => 'Diploma de licenta',
                        'specialization' => 'Computer Science',
                        'description' => '',
                        'start' => '2015',
                        'end' => '2018'
                    ]
                ],
                'experience' => [
                    'job' => [
                        'position' => 'Software Engineer',
                        'institution' => $faker->company,
                        'location' => $faker->streetAddress,
                        'description' => 'Dezvoltare aplicatii software',
                        'start' => '2016',
                        'end' => '',
                        'present' => 'prezent'
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
