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
                    $table->decimal($columnName, 8, 2)->nullable()->after('id');
                }
            });
        }
        $fillWeight = [
            [
                // Weight 1
                'id' => 1, // Baris kriteria 1
            ],
            [
                // Weight 2
                'id' => 2, // Baris kriteria 2
            ],
            [
                // Weight 3
                'id' => 3, // Baris kriteria 3
            ],
            [
                // Weight 4
                'id' => 4, // Baris kriteria 3
            ],
            [
                // Weight 5
                'id' => 5, // Baris kriteria 3
            ],
            [
                // Weight 6
                'id' => 6, // Baris kriteria 3
            ],
            [
                // Weight 7
                'id' => 7, // Baris kriteria 1
            ],
        ];

        foreach ($fillWeight as $weightData) {
            CriteriaWeight::create($weightData);
        }
    }
}
