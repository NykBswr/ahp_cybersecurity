<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fillCriteria = [
            [
                // Criteria 1
                'code' => 'C0',
                'name' => 'Integrity',
            ],
            [
                // Criteria 2
                'code' => 'C1',
                'name' => 'Availability',
            ],
            [
                // Criteria 3
                'code' => 'C2',
                'name' => 'Scalability',
            ]
        ];

        foreach ($fillCriteria as $criteriaData) {
            \App\Models\Criteria::create($criteriaData);
        }
    }
}
