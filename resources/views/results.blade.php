<x-layout>
    <section>
        <x-section-heading>Result Articles</x-section-heading>
    </section>
    <section class="mx-auto mt-2 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-8 pb-10 sm:mt-4 sm:pt-2 lg:mx-10 lg:max-w-none lg:grid-cols-3">
        @foreach ($articles as $article)
        <x-article-card :article="$article"></x-article-card>
        @endforeach
    </section>
</x-layout>