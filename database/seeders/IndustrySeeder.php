<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Industry::insert([
            ['name' => 'Lab'],
            ['name' => 'Education'],
            ['name' => 'Printing'],
            ['name' => 'Hobby'],
        ]);
    }
}
