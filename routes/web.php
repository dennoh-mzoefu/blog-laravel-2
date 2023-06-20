<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts',[
        'posts' => Post::latest()->with(['category','author','tags'])->get(),
    ]);
});

// similar tags page
Route::get('/tag/{tag:name}', function (Tag $tag) {
    return view('posts',[
        'posts' => $tag->posts,
    ]);
});

Route::get('posts/{post:slug}',function(Post $post){

    return view('post', [
        'post' => $post
    ]);
    
})->where('post','[A-z_\-]+');

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts', [
        'posts' => $category->posts
    ]);
    
})->where('post','[A-z_\-]+');
Route::get('author/{author:username}',function(User $author){
    return view('posts', [
        'posts' => $author->posts
    ]);
    
})->where('post','[A-z_\-]+');