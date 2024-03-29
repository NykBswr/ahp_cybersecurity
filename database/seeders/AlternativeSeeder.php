<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fillAlternative = [
            [
                // Alternative 1
                'code' => 'A0',
                'name' => 'Alternative 1',
            ],
            [
                // Alternative 2
                'code' => 'A1',
                'name' => 'Alternative 2',
            ],
            [
                // Alternative 3
                'code' => 'A2',
                'name' => 'Alternative 3',
            ]
        ];

        foreach ($fillAlternative as $alternativeData) {
            \App\Models\Alternative::create($alternativeData);
        }
    }
}
