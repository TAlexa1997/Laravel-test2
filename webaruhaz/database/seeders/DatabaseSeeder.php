<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Outfit::factory(10)->create();
        \App\Models\Additional::factory(10)->create();
        \App\Models\Bottom::factory(10)->create();
        \App\Models\Upper::factory(10)->create();
        \App\Models\User::factory(10)->create();
    }
}
