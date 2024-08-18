<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article Form</title>
    @vite(['resources/js/app.js'])
</head>
<body class="bg-white p-6">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Article Information</h2>
        <p class="mb-6">This information will be displayed publicly so be careful what you share.</p>
        <form method="POST" action="/articles" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                @error('title')
                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>                @enderror
            </div>
            <div class="mb-4">
                <label for="body" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="body" id="body" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required></textarea>
                @error('body')
                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>                @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-600 hover:file:bg-indigo-100">
                @error('image')
                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>                @enderror
            </div>
            <div class="mb-4">
                <label for="publish_date" class="block text-sm font-medium text-gray-700">Publish Date</label>
                <input type="date" name="publish_date" id="publish_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('publish_date')
                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>                @enderror
            </div>
            <div class="mb-4">
                <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                <input type="text" name="tags" id="tags" placeholder="Enter tags separated by commas" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @error('tags')
                <p class="text-xs text-red-500 font-semibold">{{ $message }}</p>
                @enderror
            </div>
            <div class="flex justify-end">
                <a href="/" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded mr-2">Cancel</a>
                <button type="submit" class="bg-indigo-600 hover:bg-indigo-800 text-white font-bold py-2 px-4 rounded">Save</button>
            </div>
        </form>
    </div>
    <main>{{ $slot }}</main>
</body>
</html>
