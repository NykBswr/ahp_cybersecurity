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
        $numberOfColumns = 7;

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
                'code' => 'A0',
                'name' =>'Horangi',
                'C1' => 7, // Kolom kriteria 1
                'C2' => 8, // Kolom kriteria 2
                'C3' => 7, // Kolom kriteria 3
                'C4' => 8, // Kolom kriteria 4
                'C5' => 10, // Kolom kriteria 5
                'C6' => 7, // Kolom kriteria 6
                'C7' => 10, // Kolom kriteria 7
            ],
            [
                'code' => 'A1',
                'name' =>'Fortinet',
                'C1' => 8, // Kolom kriteria 1
                'C2' => 9, // Kolom kriteria 2
                'C3' => 10, // Kolom kriteria 3
                'C4' => 7, // Kolom kriteria 4
                'C5' => 8, // Kolom kriteria 5
                'C6' => 10, // Kolom kriteria 6
                'C7' => 17, // Kolom kriteria 7
            ],
            [
                'code' => 'A2',
                'name' =>'Cisco',
                'C1' => 8, // Kolom kriteria 1
                'C2' => 10, // Kolom kriteria 2
                'C3' => 8, // Kolom kriteria 3
                'C4' => 7, // Kolom kriteria 4
                'C5' => 10, // Kolom kriteria 5
                'C6' => 10, // Kolom kriteria 6
                'C7' => 17, // Kolom kriteria 7
            ],
            [
                'code' => 'A3',
                'name' =>'Zscaler',
                'C1' => 8, // Kolom kriteria 1
                'C2' => 8, // Kolom kriteria 2
                'C3' => 10, // Kolom kriteria 3
                'C4' => 10, // Kolom kriteria 4
                'C5' => 7, // Kolom kriteria 5
                'C6' => 8, // Kolom kriteria 6
                'C7' => 7, // Kolom kriteria 7
            ],
            [
                'code' => 'A4',
                'name' =>'Darktrace',
                'C1' => 7, // Kolom kriteria 1
                'C2' => 7, // Kolom kriteria 2
                'C3' => 8, // Kolom kriteria 3
                'C4' => 10, // Kolom kriteria 4
                'C5' => 8, // Kolom kriteria 5
                'C6' => 7, // Kolom kriteria 6
                'C7' => 6, // Kolom kriteria 7
            ],
            [
                'code' => 'A5',
                'name' =>'Trend Micro',
                'C1' => 9, // Kolom kriteria 1
                'C2' => 7, // Kolom kriteria 2
                'C3' => 7, // Kolom kriteria 3
                'C4' => 9, // Kolom kriteria 4
                'C5' => 10, // Kolom kriteria 5
                'C6' => 7, // Kolom kriteria 6
                'C7' => 6, // Kolom kriteria 7
            ],
            [
                'code' => 'A6',
                'name' =>'Palo Alto',
                'C1' => 10, // Kolom kriteria 1
                'C2' => 10, // Kolom kriteria 2
                'C3' => 6, // Kolom kriteria 3
                'C4' => 7, // Kolom kriteria 4
                'C5' => 8, // Kolom kriteria 5
                'C6' => 10, // Kolom kriteria 6
                'C7' => 8, // Kolom kriteria 7
            ],
            [
                'code' => 'A7',
                'name' =>'Secureworks',
                'C1' => 6, // Kolom kriteria 1
                'C2' => 6, // Kolom kriteria 2
                'C3' => 10, // Kolom kriteria 3
                'C4' => 10, // Kolom kriteria 4
                'C5' => 7, // Kolom kriteria 5
                'C6' => 6, // Kolom kriteria 6
                'C7' => 7, // Kolom kriteria 7
            ],
            [
                'code' => 'A8',
                'name' =>'Cybereason',
                'C1' => 7, // Kolom kriteria 1
                'C2' => 10, // Kolom kriteria 2
                'C3' => 10, // Kolom kriteria 3
                'C4' => 8, // Kolom kriteria 4
                'C5' => 8, // Kolom kriteria 5
                'C6' => 7, // Kolom kriteria 6
                'C7' => 6, // Kolom kriteria 7
            ],
            [
                'code' => 'A9',
                'name' =>'Forcepoint',
                'C1' => 10, // Kolom kriteria 1
                'C2' => 10, // Kolom kriteria 2
                'C3' => 7, // Kolom kriteria 3
                'C4' => 9, // Kolom kriteria 4
                'C5' => 7, // Kolom kriteria 5
                'C6' => 10, // Kolom kriteria 6
                'C7' => 8, // Kolom kriteria 7
            ],
            [
                'code' => 'A10',
                'name' =>'Webroot',
                'C1' => 7, // Kolom kriteria 1
                'C2' => 7, // Kolom kriteria 2
                'C3' => 8, // Kolom kriteria 3
                'C4' => 10, // Kolom kriteria 4
                'C5' => 7, // Kolom kriteria 5
                'C6' => 7, // Kolom kriteria 6
                'C7' => 8, // Kolom kriteria 7
            ],
            [
                'code' => 'A11',
                'name' =>'RSA',
                'C1' => 10, // Kolom kriteria 1
                'C2' => 9, // Kolom kriteria 2
                'C3' => 6, // Kolom kriteria 3
                'C4' => 10, // Kolom kriteria 4
                'C5' => 6, // Kolom kriteria 5
                'C6' => 8, // Kolom kriteria 6
                'C7' => 9, // Kolom kriteria 7
            ],
            [
                'code' => 'A12',
                'name' =>'Imperva',
                'C1' => 10, // Kolom kriteria 1
                'C2' => 10, // Kolom kriteria 2
                'C3' => 8, // Kolom kriteria 3
                'C4' => 10, // Kolom kriteria 4
                'C5' => 9, // Kolom kriteria 5
                'C6' => 8, // Kolom kriteria 6
                'C7' => 8, // Kolom kriteria 7
            ],
            [
                'code' => 'A13',
                'name' =>'Crowdstrike',
                'C1' => 10, // Kolom kriteria 1
                'C2' => 6, // Kolom kriteria 2
                'C3' => 10, // Kolom kriteria 3
                'C4' => 9, // Kolom kriteria 4
                'C5' => 7, // Kolom kriteria 5
                'C6' => 7, // Kolom kriteria 6
                'C7' => 10, // Kolom kriteria 7
            ],
        ];

        foreach ($fillAlternative as $alternativeData) {
            \App\Models\Alternative::create($alternativeData);
        }
    }
}
