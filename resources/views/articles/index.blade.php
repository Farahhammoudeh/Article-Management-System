<x-layout>
    <section>
        <x-section-heading>Articles</x-section-heading>
    </section>
    
    <section class="mx-auto mt-2 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 pb-10 sm:mt-4 sm:pt-2 lg:mx-10 lg:max-w-none lg:grid-cols-3">
        @foreach ($articles as $article)
            <div>
                <a href="/articles/{{ $article->id }}">
                <x-article-image :src="asset('storage/' . $article->image)" />
                <x-article-card 
                    :article="$article" 
                    :author="$article->author" 
                    :tag="$article->tag" 
                    :full="false" />
                </a>
            </div>
        @endforeach
    </section>
    <section>{{ $articles->links() }}</section>
</x-layout>
