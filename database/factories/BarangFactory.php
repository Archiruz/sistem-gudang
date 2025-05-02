<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_barang' => $this->faker->word(),
            'kode' => strtoupper(Str::random(5)),
            'kategori' => $this->faker->word(),
            'lokasi' => $this->faker->city(),
            'deskripsi' => $this->faker->sentence(),
        ];
    }
}
