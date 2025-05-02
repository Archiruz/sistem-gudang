<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Barang;
use App\Models\Mutasi;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => bcrypt('password'),
        ]);

        Barang::factory(10)->create();
        Mutasi::factory(20)->create();
    }
}
