<?php

namespace Database\Seeders;

use App\Models\KategoriSoal;
use Illuminate\Database\Seeder;

class CreateKategoriSoalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoriSoals = [
            [
                'id_durasi' => 1,
                'nama_kategori' => 'Kategori 1'
            ],
            [
                'id_durasi' => 2,
                'nama_kategori' => 'Kategori 2'
            ],
            [
                'id_durasi' => 3,
                'nama_kategori' => 'Kategori 3'
            ],
        ];

        foreach ($kategoriSoals as $key => $value) {
            KategoriSoal::create($value);
        }
    }
}
