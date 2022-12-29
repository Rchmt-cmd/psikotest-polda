<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'periode' => 'I',
            'tanggal_tes' => $this->faker->date('Y-m-d'),
            'waktu_mulai' => $this->faker->time(),
            'waktu_selesai' => $this->faker->time(),
        ];
    }
}
