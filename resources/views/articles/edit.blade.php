<x-layout>
    <section class="mx-auto mt-4 max-w-2xl px-4 py-6 sm:mt-6 sm:px-6 lg:mx-10 lg:max-w-none">
        <h1 class="text-2xl font-bold leading-6 text-gray-900">Edit Article: {{ $article->title }}</h1>

        <form method="POST" action="{{ route('articles.update', $article) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div>
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ old('title', $article->title) }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input 
                    type="file" 
                    id="image" 
                    name="image" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                @error('image')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="body" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea 
                    id="body" 
                    name="body" 
                    rows="5"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('body', $article->body) }}</textarea>
                @error('body')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="publish_date" class="block text-sm font-medium text-gray-700">Publish Date</label>
                <input 
                    type="date" 
                    id="publish_date" 
                    name="publish_date" 
                    value="{{ old('publish_date', $article->publish_date) }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                @error('publish_date')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tags" class="block text-sm font-medium text-gray-700">Tags</label>
                <input 
                    type="text" 
                    id="tags" 
                    name="tags" 
                    value="{{ old('tags', $article->tags->pluck('name')->join(', ')) }}" 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
                @error('tags')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between gap-x-6">
                @can('update', $article)
                    <button 
                        type="submit" 
                        class="rounded-md bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Update Article
                    </button>
                @endcan

                <a 
                    href="{{ route('articles') }}" 
                    class="inline-flex items-center ml-4 rounded-md border border-transparent bg-gray-200 px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    Cancel
                </a>
            </div>
        </form>
        
        @can('delete', $article)
            <form method="POST" action="{{ route('articles.destroy', $article) }}" id="delete-form" class="mt-6">
                @csrf
                @method('DELETE')
                <button 
                    type="button" 
                    onclick="document.getElementById('delete-form').submit()" 
                    class="rounded-md bg-red-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2">
                    Delete
                </button>
            </form>
        @endcan
    </section>
</x-layout>
