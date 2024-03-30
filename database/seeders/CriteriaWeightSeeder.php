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
        $numberOfColumns = 3;

        // Loop untuk membuat kolom dengan nama 'W1', 'W2', 'W3', dst.
        for ($i = 1; $i <= $numberOfColumns; $i++) {
            $columnName = 'W' . $i;

            // Tambahkan kolom jika belum ada
            Schema::table('criteria_weights', function (Blueprint $table) use ($columnName) {
                if (!Schema::hasColumn('criteria_weights', $columnName)) {
                    $table->decimal($columnName, 8, 2)->nullable()->after('id');
                }
            });
        }
        $fillWeight = [
            [
                // Weight 1
                'id' => 0, // Baris kriteria 1
                'W1' => 1, // Kolom kriteria 1
                'W2' => 2, // Kolom kriteria 2
                'W3' => 5, // Kolom kriteria 3
            ],
            [
                // Weight 2
                'id' => 2, // Baris kriteria 2
                'W1' => 0.5, // Kolom kriteria 1
                'W2' => 1, // Kolom kriteria 2
                'W3' => 4, // Kolom kriteria 3
            ],
            [
                // Weight 3
                'id' => 3, // Baris kriteria 3
                'W1' => 0.2, // Kolom kriteria 1
                'W2' => 0.25, // Kolom kriteria 2
                'W3' => 1, // Kolom kriteria 3
            ]
        ];

        foreach ($fillWeight as $weightData) {
            CriteriaWeight::create($weightData);
        }
    }
}
