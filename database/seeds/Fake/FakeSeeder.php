<?php

use Illuminate\Database\Seeder;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersSeeder::class);
        $this->command->info('Users Seeded');

        $this->call(CompaniesSeeder::class);
        $this->command->info('Companies Seeded');

        $this->call(JobsSeeder::class);
        $this->command->info('Jobs Seeded');
    }
}
