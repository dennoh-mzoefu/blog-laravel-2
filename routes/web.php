<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class,'index'])->name('home');

//submit articles
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');
Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');

//submit tags
Route::get('/tags/create', 'App\Http\Controllers\TagController@create')->name('tags.create');
Route::post('/tags', 'App\Http\Controllers\TagController@store')->name('tags.store');


// similar tags page
Route::get('/tag/{tag:name}', function (Tag $tag) {
    return view('posts',[
        'posts' => $tag->posts,
        'categories' => Category::all()

    ]);
});

Route::get('posts/{post:slug}',function(Post $post){

    return view('post', [
        'post' => $post
    ]);
    
})->where('post','[A-z_\-]+');

Route::get('categories/{category:slug}',function(Category $category){
    return view('posts', [
        'posts' => $category->posts,
        'currentCategory' => $category,
        'categories' => Category::all()
    ]);
    
})->where('post','[A-z_\-]+');
Route::get('author/{author:username}',function(User $author){
    return view('posts', [
        'posts' => $author->posts
    ]);
    
})->where('post','[A-z_\-]+');