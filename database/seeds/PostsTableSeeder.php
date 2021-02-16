<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 20; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $post->subtitle = $faker->sentence($nbWords = 3, $variableNbWords = true);
            $post->author = $faker->name();
            $post->text = $faker->text(500);
            $post->created_at = $faker->dateTime();
            $post->updated_at = $faker->dateTime();
            $post->save();
        }
    }
}
