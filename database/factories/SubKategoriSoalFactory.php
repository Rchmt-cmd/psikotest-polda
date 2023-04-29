<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubKategoriSoalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_kategori' => 2,
            'deskripsi_subkategori' => $this->faker->text(15),
            'isi_subkategori' => $this->faker->text(300),    
        ];
    }
}
