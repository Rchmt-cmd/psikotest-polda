<?php

namespace Database\Seeders;

use App\Models\SubKategoriSoal;
use Illuminate\Database\Seeder;

class CreateSubKategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SubKategoriSoal::factory(10)->create();
    }
}
