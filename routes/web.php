<?php

use App\Models\Post;
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
  
   
    // $posts=array_map(function($file){
    //     $document=YamlFrontMatter::parseFile($file);
    //     $document->title,
    //     $document->excerpt,
    //     $document->date,
    //     $document->body(),
    //     $document->slug

    // },$files)

    
    return view('posts',[
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post:slug}',function(Post $post){

    return view('post', [
        'post' => $post
    ]);
    
})->where('post','[A-z_\-]+');