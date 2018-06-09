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

        $numberOfCompanies = 100;

        $users = \App\Models\User::limit(100)
            ->get();

        if ($users && $users->count() >= $numberOfCompanies) {
            for ($i = 0; $i < $numberOfCompanies; $i++) {
                $users[$i]->update(['employer' => true]);

                $companies->push([
                    'company_name' => $faker->company,
                    'description' => $faker->paragraphs(50, 1),
                    'user_id' => $users[$i]->id,
                    'logo' => '/dist/img/company-avatar.png',
                    'phone' => $faker->phoneNumber,
                    'email' => $faker->companyEmail,
                    'website' => $faker->domainName,
                    'location' => $faker->address,
                ]);
            }

            $groups = $companies->split($numberOfCompanies / 1000);

            foreach ($groups as $group) {
                \Illuminate\Support\Facades\DB::table('companies')
                    ->insert($group->toArray());
            }
        }
    }
}
