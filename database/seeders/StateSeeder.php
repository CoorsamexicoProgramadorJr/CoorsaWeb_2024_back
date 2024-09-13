<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('states')->insert([
            [
                'name' => 'Distrito Federal',
                'code' => 'DIF',
                'area_code_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Aguascalientes',
                'code' => 'AGU',
                'area_code_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Baja California',
                'code' => 'BCN',
                'area_code_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Baja California Sur',
                'code' => 'BCS',
                'area_code_id' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Campeche',
                'code' => 'CAM',
                'area_code_id' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chiapas',
                'code' => 'CHP',
                'area_code_id' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chihuahua',
                'code' => 'CHH',
                'area_code_id' => 7,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Coahuila',
                'code' => 'COA',
                'area_code_id' => 8,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Colima',
                'code' => 'COL',
                'area_code_id' => 9,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Durango',
                'code' => 'DUR',
                'area_code_id' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Guanajuato',
                'code' => 'GUA',
                'area_code_id' => 11,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Guerrero',
                'code' => 'GRO',
                'area_code_id' => 12,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Hidalgo',
                'code' => 'HID',
                'area_code_id' => 13,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Jalisco',
                'code' => 'JAL',
                'area_code_id' => 14,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Michoacan',
                'code' => 'MIC',
                'area_code_id' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Morelos',
                'code' => 'MOR',
                'area_code_id' => 16,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nayarit',
                'code' => 'NAY',
                'area_code_id' => 17,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Nuevo Leon',
                'code' => 'NLE',
                'area_code_id' => 18,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Oaxaca',
                'code' => 'OAX',
                'area_code_id' => 19,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Puebla',
                'code' => 'PUE',
                'area_code_id' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Queretaro',
                'code' => 'QUE',
                'area_code_id' => 21,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Quintana Roo',
                'code' => 'ROO',
                'area_code_id' => 22,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'San Luis Potosi',
                'code' => 'SLP',
                'area_code_id' => 23,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sinaloa',
                'code' => 'SIN',
                'area_code_id' => 24,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sonora',
                'code' => 'SON',
                'area_code_id' => 25,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tabasco',
                'code' => 'TAB',
                'area_code_id' => 26,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tamaulipas',
                'code' => 'TAM',
                'area_code_id' => 27,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Tlaxcala',
                'code' => 'TLA',
                'area_code_id' => 28,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Veracruz',
                'code' => 'VER',
                'area_code_id' => 29,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Yucatan',
                'code' => 'YUC',
                'area_code_id' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Zacatecas',
                'code' => 'ZAC',
                'area_code_id' => 31,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
