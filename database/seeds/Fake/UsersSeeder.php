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

        $users->push(
            [
                'first_name' => 'Demo',
                'last_name' => 'Utilizator',
                'email' => 'utilizator@demo.com',
                'password' => bcrypt('user123'),
            ]
        );

        \Illuminate\Support\Facades\DB::table('users')
            ->insert($users->toArray());

        $users = collect();
        $users->push(
            [
                'first_name' => 'Demo',
                'last_name' => 'Companie',
                'email' => 'companie@demo.com',
                'password' => bcrypt('companie123'),
            ]
        );
        \Illuminate\Support\Facades\DB::table('users')
            ->insert($users->toArray());


        $users = collect();
        for ($i = 0; $i < $numberOfUsers; $i++) {
            $users->push([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'password' => bcrypt('parola'),
                'avatar' => $faker->imageUrl($width = 200, $height = 200)
            ]);
        }

        $groups = $users->split($numberOfUsers / 1000);

        foreach ($groups as $group) {
            \Illuminate\Support\Facades\DB::table('users')
                ->insert($group->toArray());
        }

        $users = \App\Models\User::all();

        foreach ($users as $user) {
            $user->assignRole('candidate');
        }

        $companyUser = \App\Models\User::where('email', 'companie@demo.com')
            ->first();
        if ($companyUser) {
            $companyUser->syncRoles(['employer']);
            $companyUser->update([
                'employer' => true
            ]);
        }
    }
}
