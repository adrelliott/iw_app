<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $industries = \App\Models\Industry::all();
        // $brands = \App\Models\Brand::all();
        // $businesstypes = \App\Models\BusinessType::all();

        $contacts = \App\Models\Contact::factory(500)->create();
    }
}
