<?php

namespace Database\Seeders;

use Edumad\Models\Post;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = User::where('email', 'pv1@allaravel.dev')->first();
        $author2 = User::where('email', 'pv2@allaravel.dev')->first();
        $faker = Factory::create();
        for ($i=0; $i < 10; $i++) {
            $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $post = Post::create([
                'title' => $title,
                'body' => $faker->text($maxNbChars = 1000),
                'slug' => Str::slug($title),
                'published' => rand(0,1),
                'user_id' => $author1->id
            ]);
            $title = $faker->sentence($nbWords = 6, $variableNbWords = true);
            $post = Post::create([
                'title' => $title,
                'body' => $faker->text($maxNbChars = 1000),
                'slug' => Str::slug($title),
                'published' => rand(0,1),
                'user_id' => $author2->id
            ]);
        }
    }
}
