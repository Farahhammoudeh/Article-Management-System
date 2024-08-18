<x-layout>
    <section class="mx-auto mt-2 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 pb-10 sm:mt-4 sm:pt-2 lg:mx-10 lg:max-w-none lg:grid-cols-1">
            <x-article-image :src="asset('storage/' . $article->image)" />
            <x-article-card 
                :article="$article" 
                :author="$article->author" 
                :full="true" />

                @can('update', $article)
                <div class="mt-4 text-red-500 font-semibold">
                   <a href="/articles/{{ $article->id }}/edit">Edit Article</a>
                </div>
            @endcan
    </section>
</x-layout>

