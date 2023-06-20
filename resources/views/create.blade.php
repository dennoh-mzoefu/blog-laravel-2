<x-layout>
    <div class="flex flex-wrap">
    <div>
    <div class='flex flex-col justify-start items-center '>
    <h1 class="text-2xl font-bold">Admin Section </h1>
    <h2 class="mt-10 text-blue bg-gray-100 px-2 py-1">Submit Article</h2>
    </div>
<form method="POST" action="{{ route('posts.store') }}" class=' flex flex-col justify-start'>
    @csrf
    <div class="w-fit mx-auto items-start bg-gray-200  p-4 ">
    <div class='flex flex-col'>
        <label for="title">Title</label>
        <input type="text"  name="title" id="title" required>
    </div>
    <div class='flex flex-col'>
        <label for="excerpt">Excerpt</label>
        <input type="text"  name="excerpt" id="excerpt" required>
    </div>
    <div class='flex flex-col'>
        <label for="slug">Slug</label>
        <input type="text"  name="slug" id="slug" required>
    </div>
    <div class='flex flex-col'>
        <label for="content">Content</label>
        <textarea name="body" id="body" rows="4" cols="50" required></textarea>
    </div>
    <div class='flex flex-col '>
        <label for="tags">Tags</label>
        <select name="tags[]" id="tags" class="justify-self-start bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" multiple required>
            @foreach ($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <button type="submit" class='bg-green-300 px-3 py-1 mt-5'>Submit</button>
    </div>
    </div>
</form>
    </div>
<div class="mt-8 mx-auto">
<div class='flex flex-col justify-start items-center'>
    <h2 class="mt-10 text-blue bg-gray-100 px-2 py-1 my-2">Create Tag</h2>
    </div>
<form method="POST" class=' flex flex-col justify-start'  action="{{ route('tags.store') }}">
    @csrf
    <div class="w-fit mx-auto items-start bg-gray-200  p-4 ">
    <div>
        <label for="name">Tag Name:</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <button type="submit" class='bg-yellow-300 px-3 py-1 mt-5'>Create Tag</button>
    </div>
    </div>
</form>
</div>
    </div>
</x-layout>