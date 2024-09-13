<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AreaCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('area_codes')->insert([
            [
                'code' => "55",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "449",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "686",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "612",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "981",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "961",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "614",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "844",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "312",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "618",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "473",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "747",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "771",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "33",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "443",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "777",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "311",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "81",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "951",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "222",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "442",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "983",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "444",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "667",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "662",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "993",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "834",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "246",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "228",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "990, 999",
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'code' => "492",
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
