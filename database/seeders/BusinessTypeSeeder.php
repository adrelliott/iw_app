<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\BusinessType::insert([
            ['name' => 'School'],
            ['name' => 'University'],
            ['name' => 'Reseller'],
            ['name' => 'Personal'],
            ['name' => 'Company'],
        ]);
    }
}
