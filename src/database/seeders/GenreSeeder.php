<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            [
                'name' => 'Action',
            ],
            [
                'name' => 'Superhero',
            ],
            [
                'name' => 'Comedy',
            ],
            [
                'name' => 'Crime',
            ],
            [
                'name' => 'Drama',
            ],
            [
                'name' => 'Fantasy',
            ],
            [
                'name' => 'Historical',
            ],
            [
                'name' => 'Historical fiction',
            ],
            [
                'name' => 'Horror',
            ],
            [
                'name' => 'Magical realism',
            ]
        ];

        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
