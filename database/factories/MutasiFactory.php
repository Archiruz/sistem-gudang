<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Barang;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mutasi>
 */
class MutasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tanggal' => $this->faker->date(),
            'jenis_mutasi' => $this->faker->randomElement(['masuk', 'keluar']),
            'jumlah' => $this->faker->numberBetween(1, 100),
            'keterangan' => $this->faker->sentence(),
            'user_id' => User::factory(),
            'barang_id' => Barang::factory(),
        ];
    }
}
