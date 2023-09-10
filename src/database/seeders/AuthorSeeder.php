<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Greta Gerwig'
            ],
            [
                'name' => 'Marry'
            ],
            [
                'name' => 'John'
            ],
            [
                'name' => 'Peter'
            ],
            [
                'name' => 'Stan Lee'
            ]
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
