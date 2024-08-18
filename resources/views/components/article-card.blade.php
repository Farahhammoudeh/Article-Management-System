@props(['article', 'author', 'tag', 'full' => false])
<article class="flex max-w-xl flex-col items-start justify-between">
    <div class="flex items-center gap-x-4 text-xs">
        <x-article-date :publish_date="$article->publish_date"></x-article-date>
        @foreach ($article->tags as $tag)
            <x-tag :tag="$tag"></x-tag>
        @endforeach
    </div>
    <div class="group relative w-full">
        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="/articles/{{ $article['id'] }}">
                <x-article-title :title="$article->title"></x-article-title>
            </a>
        </h3>
        <x-article-paragraph :body="$article->body"></x-article-paragraph>
    </div>
    <div class="relative mt-8 flex items-center gap-x-4">
        <x-author-photo :src="asset('storage/' . $article->author->profile_image)"></x-author-photo>
        <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
                <a href="/authors/{{ $article->author->id }}">
                    <x-author-name :name="$article->author->name"></x-author-name>
                </a>
            </p>
            <x-author-job :job="$article->author->job"></x-author-job>
        </div>
    </div>
</article>
