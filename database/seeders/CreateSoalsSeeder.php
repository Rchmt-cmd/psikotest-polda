<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateSoalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\SoalTes::factory(30)->create();
    }
}
