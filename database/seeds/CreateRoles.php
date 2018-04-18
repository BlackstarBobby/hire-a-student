<?php

use Illuminate\Database\Seeder;

/**
 * Class CreateRoles
 */
class CreateRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'candidate',
            'employer'
        ];

        foreach ($roles as $role) {
            \Spatie\Permission\Models\Role::create([
                'name' => $role
            ]);
        }
    }
}
