<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('directives')->insert([
            ['name' => 'Renato Ortiz', 'position' => 'CEO', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Renato.jpg', 'created_at' => now(), 'updated_at' => now()],
            ['name'=> 'Vania Jimenez', 'position'=> 'Gerente Comercial', 'image'=> 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Vania.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Josafat Huerta', 'position' => 'Abogado Corporativo', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Josafat_Nahum.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Patricia Palma','position' => 'Subgerente de RRHH', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Paty.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Carolina Gaona', 'position' => 'Subgerente de Operaciones A', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Caro.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Carlos Martinez', 'position' => 'Subgerente de Operaciones B', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/CarlosMtz.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Roberto Pacheco', 'position' => 'Jefe de Ingenieria', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Roberto.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lesly Gallardo', 'position' => 'Líder de camiones de Patio', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Leslye.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ivonne Torres', 'position' => 'Auditor de Control Interno', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Ivonne.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Eduardo Rendon', 'position' => 'Coordinador de Marketing y Diseño', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/Lalo.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Uriel Olvera', 'position' => 'Gerente de Operaciones', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/uriel.png' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Rodrigo Ordoñez', 'position' => 'Gerente de Administracion', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/rodrigo.png' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Xiadani Contreras', 'position' => 'Customer Service', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/DANA.jpg' , 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Oliver Coronado', 'position' => 'Gerente de Recursos Humanos', 'image' => 'https://storage.googleapis.com/coorsa-mexico-web/img/Directivos/OLIVER.jpg' , 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
