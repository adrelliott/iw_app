<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Brand::insert([
            ['name' => 'Nova'],
            ['name' => 'Imaging Warehouse'],
            ['name' => 'Permajet'],
        ]);
    }
}
