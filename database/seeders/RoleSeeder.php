<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Role::insert([
            ['name' => 'SuperAdmin'],
            ['name' => 'Admin'],
            ['name' => 'User'],
        ]);
    }
}
