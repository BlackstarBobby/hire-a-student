<?php

use Illuminate\Database\Seeder;

/**
 * Class UsersSeeder
 */
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $users = collect();

        $numberOfUsers = 1000;

        for ($i = 0; $i < $numberOfUsers; $i++) {
            $users->push([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('parola'),
            ]);
        }

        $groups = $users->split($numberOfUsers / 1000);

        foreach ($groups as $group) {
            \Illuminate\Support\Facades\DB::table('users')
                ->insert($group->toArray());
        }
    }
}
