<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
  
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'title' => 'required',
            'tags' => 'required|array',
            // 'category_id' => 'required',
            'slug' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        // Create the post
        $post = Post::create([
            'title' => $validatedData['title'],
            // currently have one user
            'user_id' => 1,
            // 'category_id' => $validatedData['category_id'],
            'category_id' => 1,
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug'],
            'excerpt' => $validatedData['excerpt'],
            'body' => $validatedData['body'],
        ]);

        // Associate tags with the post
        $tags = $validatedData['tags'];
        $post->tags()->attach($tags);

        // Redirect or return a response
        return redirect()->back()->with('success', 'Post created successfully.');
    }
    public function create()
{
    $tags = Tag::all();
    return view('create', compact('tags'));
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
