<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create();

       $personal = Category::create([
        'name' => 'Personal',
        'slug' => 'personal'
       ]);
       $work = Category::create([
        'name' => 'Work',
        'slug' => 'Work'
       ]);
       $hobby = Category::create([
        'name' => 'Hobby',
        'slug' => 'Hobby'
       ]);

       Post::create([
        'user_id' => $user->id,
        'category_id' => $personal->id,
        'title' => 'Personal Post',
        'slug' => 'my-personal-post',
        'excerpt' => "Lorem and KJASNDKja  bhasd",
        'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl nibh, ullamcorper sit amet nisi ac, dignissim efficitur ipsum. Integer tristique turpis tellus, vitae tincidunt purus molestie at. Morbi rutrum sodales odio,"
       ]);
       Post::create([
        'user_id' => $user->id,
        'category_id' => $work->id,
        'title' => 'Work Post',
        'slug' => 'my-work-post',
        'excerpt' => "Lorem and KJASNDKja  bhasd",
        'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl nibh, ullamcorper sit amet nisi ac, dignissim efficitur ipsum. Integer tristique turpis tellus, vitae tincidunt purus molestie at. Morbi rutrum sodales odio,"
       ]);
       Post::create([
        'user_id' => $user->id,
        'category_id' => $hobby->id,
        'title' => 'Hobby Post',
        'slug' => 'my-hobby-post',
        'excerpt' => "Lorem and KJASNDKja  bhasd",
        'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nisl nibh, ullamcorper sit amet nisi ac, dignissim efficitur ipsum. Integer tristique turpis tellus, vitae tincidunt purus molestie at. Morbi rutrum sodales odio,"
       ]);
    }
}
