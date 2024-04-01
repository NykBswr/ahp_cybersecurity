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
                'code' => 'C0',
                'name' =>'Confidentially',
            ],
            [
                'code' => 'C1',
                'name' => 'Integrity',
            ],
            [
                'code' => 'C2',
                'name' => 'Availability',
            ],
            [
                'code' => 'C3',
                'name' => 'Scalability',
            ],
            [
                'code' => 'C4',
                'name' => 'Interoperability',
            ],
            [
                'code' => 'C5',
                'name' => 'Accountability',
            ],
            [
                'code' => 'C6',
                'name' => 'Accesibility',
            ],
        ];

        foreach ($fillCriteria as $criteriaData) {
            \App\Models\Criteria::create($criteriaData);
        }
    }
}
