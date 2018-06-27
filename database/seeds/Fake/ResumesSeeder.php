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
                        'institution' => [
                            0 => 'Facultatea de Matematica si Informatica, Universitatea din Bucuresti'
                        ],
                        'type' => [
                            0 => 'Diploma de licenta'
                        ],
                        'specialization' => [0 => 'Computer Science'],
                        'description' => [0 => ""],
                        'start' => [0 => '2015'],
                        'end' => [0 => '2018']
                    ]
                ],
                'experience' => [
                    'job' => [
                        'position' => [0 => 'Software Engineer'],
                        'institution' => [0 => $faker->company],
                        'location' => [0 => $faker->streetAddress],
                        'description' => [0 => 'Dezvoltare aplicatii software'],
                        'start' => [0 => '2016'],
                        'end' => [0 => ''],
                        'present' => [0 => 'prezent']
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
