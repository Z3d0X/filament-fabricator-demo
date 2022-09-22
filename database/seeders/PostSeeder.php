<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Generator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            Post::create([
                'title' => app(Generator::class)->words(4, true),
                'summary' => app(Generator::class)->sentences(3, true),
                'body' => app(Generator::class)->paragraphs(3, true),
            ]);
        }
    }
}
