<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 10; $i++) { 
            $post = new Post;
            $post->title = $faker->sentence(1);
            $post->description = $faker->sentence(2);
            $post->image = '1717738118.jpg';
            $post->save();
        }
    }
}
