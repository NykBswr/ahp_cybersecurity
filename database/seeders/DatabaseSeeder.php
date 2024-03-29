<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CriteriaSeeder;
use Database\Seeders\AlternativeSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CriteriaSeeder::class);
        $this->call(AlternativeSeeder::class);
    }
}
