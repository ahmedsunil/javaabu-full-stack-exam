<?php

namespace Database\Seeders;

use App\Models\ApiKey;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Mohamed Ali',
            'email' => 'admin@example.com',
            'password' => Hash::make('root'), // Hash the password
        ]);

        ApiKey::factory()->create([
            'api_key' => 'AHhdhjaHKLajeyuamAHhdhjaHKLajeyuamSDfsks2SDfsks2',
        ]);

    }
}
