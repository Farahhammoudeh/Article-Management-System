<?php

use App\Models\Author;
use App\Models\Article;

it('belongs to an author', function () {
    //AAA

    $author = Author::factory()->create();
    $article = Article::factory()->create([
        'author_id' => $author->id,
    ]);

    expect($article->author->is($author))->toBeTrue();
});

it('can have tags', function () {
    $article = Article::factory()->create();

    $article->tag('Marketing');

    expect($article->tags)->toHaveCount(1);
});