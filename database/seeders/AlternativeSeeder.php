<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Jumlah kolom yang ingin Anda tambahkan
        $numberOfColumns = 3;

        // Loop untuk membuat kolom dengan nama
        for ($i = 1; $i <= $numberOfColumns; $i++) {
            $columnName = 'C' . $i;

            // Tambahkan kolom jika belum ada
            Schema::table('alternatives', function (Blueprint $table) use ($columnName) {
                if (!Schema::hasColumn('alternatives', $columnName)) {
                    $table->decimal($columnName, 8, 2)->nullable()->after('id');
                }
            });
        }
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
            ],
        ];

        foreach ($fillAlternative as $alternativeData) {
            \App\Models\Alternative::create($alternativeData);
        }
    }
}
