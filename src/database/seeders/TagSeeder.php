<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            [
            'name' => 'Movie',
            ],
            [
                'name' => 'Series',
            ],
            [
                'name' => 'Ghost Story',
            ],
            [
                'name' => 'Cartoon',
            ],
            [
                'name' => 'Thriller',
            ]
        ];

        foreach ($tags as $tag) {
            Tag::create($tag);
        }
    }
}
