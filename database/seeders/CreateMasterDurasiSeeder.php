<?php

namespace Database\Seeders;

use App\Models\MasterDurasiTes;
use Illuminate\Database\Seeder;

class CreateMasterDurasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $durasi = [
            [
                'durasi_tes' => date('H:i:s', strtotime('01:30:00'))
            ],
            [
                'durasi_tes' => date('H:i:s', strtotime('01:00:00'))
            ],
            [
                'durasi_tes' => date('H:i:s', strtotime('00:20:00'))
            ],
        ];
        
        foreach ($durasi as $key => $value) {
            MasterDurasiTes::create($value);
        }
    }
}
