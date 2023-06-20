<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
//    this seeder is used to populate post_tag table
    public function run(): void
    {
        //
        $posts = Post::all();
         $tags = Tag::all();
         
         foreach ($posts as $post) {
             $randomTags = $tags->random(rand(1,4));
             $post->tags()->attach($randomTags);
             
         }
         
    }
}
