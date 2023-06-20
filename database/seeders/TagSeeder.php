<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             // Delete existing tags
             DB::table('tags')->delete();
         // Create tags
         $tags = ['laravel', 'docker', 'ubuntu', 'ubuntu-20.04', 'laravel-sail'];
         foreach ($tags as $tagName) {
             Tag::create(['name' => $tagName]);
         }
 
         // Associate tags with posts
         $posts = Post::all();
         $tags = Tag::all();
        
         }
    }

