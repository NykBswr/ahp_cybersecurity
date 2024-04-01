<?php

namespace Database\Seeders;

use App\Models\CriteriaWeight;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CriteriaWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jumlah kolom yang ingin Anda tambahkan
        $numberOfColumns = 7;

        // Loop untuk membuat kolom dengan nama 'W1', 'W2', 'W3', dst.
        for ($i = 1; $i <= $numberOfColumns; $i++) {
            $columnName = 'W' . $i;

            // Tambahkan kolom jika belum ada
            Schema::table('criteria_weights', function (Blueprint $table) use ($columnName) {
                if (!Schema::hasColumn('criteria_weights', $columnName)) {
                    $table->float($columnName)->nullable()->after('id');
                }
            });
        }
        $fillWeight = [
            [
                // Weight 1
                'id' => 1, // Baris kriteria 1
                'W1' => 1, // Kolom kriteria 1
                'W2' => 1.224137931, // Kolom kriteria 2
                'W3' => 1.5, // Kolom kriteria 3
                'W4' => 1.17679558, // Kolom kriteria 4
                'W5' => 1.6640625, // Kolom kriteria 5
                'W6' => 2.315217391, // Kolom kriteria 6
                'W7' => 2.730769231, // Kolom kriteria 7
            ],
            [
                // Weight 2
                'id' => 2, // Baris kriteria 2
                'W1' => 0.816901408, // Kolom kriteria 1
                'W2' => 1, // Kolom kriteria 2
                'W3' => 1.225352113, // Kolom kriteria 3
                'W4' => 0.961325967, // Kolom kriteria 4
                'W5' => 1.359375, // Kolom kriteria 5
                'W6' => 1.891304348, // Kolom kriteria 6
                'W7' => 2.230769231, // Kolom kriteria 7
            ],
            [
                // Weight 3
                'id' => 3, // Baris kriteria 3
                'W1' => 0.666666667, // Kolom kriteria 1
                'W2' => 0.816091954, // Kolom kriteria 2
                'W3' => 1, // Kolom kriteria 3
                'W4' => 0.784530387, // Kolom kriteria 4
                'W5' => 1.109375, // Kolom kriteria 5
                'W6' => 1.543478261, // Kolom kriteria 6
                'W7' => 1.820512821, // Kolom kriteria 7
            ],
            [
                // Weight 4
                'id' => 4, // Baris kriteria 4
                'W1' => 0.849765258, // Kolom kriteria 1
                'W2' => 1.040229885, // Kolom kriteria 2
                'W3' => 1.274647887, // Kolom kriteria 3
                'W4' => 1, // Kolom kriteria 4
                'W5' => 1.4140625, // Kolom kriteria 5
                'W6' => 1.967391304, // Kolom kriteria 6
                'W7' => 2.320512821, // Kolom kriteria 7
            ],
            [
                // Weight 5
                'id' => 5, // Baris kriteria 5
                'W1' => 0.600938967, // Kolom kriteria 1
                'W2' => 0.735632184, // Kolom kriteria 2
                'W3' => 0.901408451, // Kolom kriteria 3
                'W4' => 0.70718232, // Kolom kriteria 4
                'W5' => 1, // Kolom kriteria 5
                'W6' => 1.391304348, // Kolom kriteria 6
                'W7' => 1.641025641, // Kolom kriteria 7
            ],
            [
                // Weight 6
                'id' => 6, // Baris kriteria 6
                'W1' => 0.431924883, // Kolom kriteria 1
                'W2' => 0.528735632, // Kolom kriteria 2
                'W3' => 0.647887324, // Kolom kriteria 3
                'W4' => 0.508287293, // Kolom kriteria 4
                'W5' => 0.71875, // Kolom kriteria 5
                'W6' => 1, // Kolom kriteria 6
                'W7' => 1.179487179, // Kolom kriteria 7
            ],
            [
                // Weight 7
                'id' => 7, // Baris kriteria 7
                'W1' => 0.366197183, // Kolom kriteria 1
                'W2' => 0.448275862, // Kolom kriteria 2
                'W3' => 0.549295775, // Kolom kriteria 3
                'W4' => 0.430939227, // Kolom kriteria 4
                'W5' => 0.609375, // Kolom kriteria 5
                'W6' => 0.847826087, // Kolom kriteria 6
                'W7' => 1, // Kolom kriteria 7
            ],
        ];

        foreach ($fillWeight as $weightData) {
            CriteriaWeight::create($weightData);
        }
    }
}
