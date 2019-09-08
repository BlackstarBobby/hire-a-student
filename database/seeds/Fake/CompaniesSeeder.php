<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $companies = collect();

        $companyUser = \App\Models\User::where('email', 'companie@demo.com')
            ->first();

        $companies->push([
            'company_name' => $faker->company,
            'description' => $faker->paragraphs(20, 1),
            'user_id' => $companyUser->id,
            'logo' => $faker->imageUrl($width = 200, $height = 200, 'abstract', true, 'Faker'),
            'phone' => $faker->phoneNumber,
            'email' => $faker->companyEmail,
            'website' => $faker->domainName,
            'location' => $faker->address,
        ]);

        $numberOfCompanies = 100;

        $users = \App\Models\User::limit(100)
            ->orderBy('id', 'desc')
            ->get();

        if ($users && $users->count() >= $numberOfCompanies) {
            for ($i = 0; $i < $numberOfCompanies; $i++) {
                $users[$i]->update(['employer' => true]);

                $companies->push([
                    'company_name' => $faker->company,
                    'description' => $faker->paragraphs(20, 1),
                    'user_id' => $users[$i]->id,
                    'logo' => $faker->imageUrl($width = 200, $height = 200, 'abstract', true, 'Faker'),
                    'phone' => $faker->phoneNumber,
                    'email' => $faker->companyEmail,
                    'website' => $faker->domainName,
                    'location' => $faker->address,
                ]);
            }

            $groups = $companies->split($numberOfCompanies / 100);

            foreach ($groups as $group) {
                \Illuminate\Support\Facades\DB::table('companies')
                    ->insert($group->toArray());
            }
        }

        foreach ($users as $user) {
            $user->syncRoles(['employer']);
            $user->update([
                'employer' => true
            ]);
        }
    }
}
