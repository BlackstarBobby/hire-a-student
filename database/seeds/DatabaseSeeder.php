<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // needed seeders

        //Roles seeder
        $this->call(CreateRoles::class);
        $this->command->info('Roles Seeded');

        //dev seeders
    }
}
