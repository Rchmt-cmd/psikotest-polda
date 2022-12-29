<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreateJadwalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Jadwal::factory(3)->create();
    }
}
