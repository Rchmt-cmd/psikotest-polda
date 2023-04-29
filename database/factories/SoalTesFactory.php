<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SoalTesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $init_number = 1;

        // function imageUrl(
        //     int $width = 640,
        //     int $height = 480,
        //     ?string $category = null, /* used as text on the image */
        //     bool $randomize = true,
        //     ?string $word = null,
        //     bool $gray = false,
        //     string $format = 'png'
        // ): string;

        return [
            'id_subkategori' => $this->faker->numberBetween(6,7),
            'id_kategori' => 1,
            'nomor_soal' => $init_number++,
            'isi_soal' => $this->faker->paragraph(),
            'pil_a' => $this->faker->sentence(),
            // 'gambar_pil_a' => $this->faker->imageUrl(80, 60, 'animals', true),
            'pil_b' => $this->faker->sentence(),
            // 'gambar_pil_b' => $this->faker->imageUrl(80, 60, 'animals', true),
            'pil_c' => $this->faker->sentence(),
            // 'gambar_pil_c' => $this->faker->imageUrl(80, 60, 'animals', true),
            'pil_d' => $this->faker->sentence(),
            // 'gambar_pil_d' => $this->faker->imageUrl(80, 60, 'animals', true),
            'pil_e' => $this->faker->sentence(),
            // 'gambar_pil_d' => $this->faker->imageUrl(80, 60, 'animals', true),
            'jawaban' => $this->faker->randomElement(['a', 'b', 'c', 'd', 'e']),
            'bobot' => 1,
        ];
    }
}
