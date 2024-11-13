<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class moviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies_tale')->insert([
            'title' => 'Harry Potter',
            'synopsis' => 'Niño mago',
            'year' => '2000',
            'cover' => '110',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'El Señor de los anillos',
            'synopsis' => 'Edad media',
            'year' => '2002',
            'cover' => '120',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'Mujer bonita',
            'synopsis' => 'mujer bonita',
            'year' => '1985',
            'cover' => '130',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'star wars',
            'synopsis' => 'guerra de las galaxias',
            'year' => '1977',
            'cover' => '140',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'dune',
            'synopsis' => 'guerra',
            'year' => '2024',
            'cover' => '150',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'rapido y furioso',
            'synopsis' => 'carrera de carros',
            'year' => '2002',
            'cover' => '160',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'x-men',
            'synopsis' => 'super heroes',
            'year' => '1989',
            'cover' => '170',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'spiderman',
            'synopsis' => 'hombre araña',
            'year' => '2010',
            'cover' => '180',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'superman',
            'synopsis' => 'hombre de acero',
            'year' => '2002',
            'cover' => '190',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);

        DB::table('movies_tale')->insert([
            'title' => 'titanic',
            'synopsis' => 'barco',
            'year' => '1988',
            'cover' => '200',
            'created_at' => '2024-09-20 00:00:00',
            'updated_at' => '2024-09-20 00:00:00',
        ]);
    }
}
