<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FolderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Folder::factory(5)
            ->hasSiblists(4)
            ->create();
    }
}
