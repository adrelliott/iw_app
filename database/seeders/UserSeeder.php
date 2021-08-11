<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\User::factory()->create([
            'name' => 'Al',
            'email' => 'al@al.com',
            'role_id' => 1
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Bill',
            'email' => 'bill@bill.com',
            'role_id' => 2
        ]);
    }
}
