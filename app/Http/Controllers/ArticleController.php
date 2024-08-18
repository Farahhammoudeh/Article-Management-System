<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreArticleRequest;
use App\Http\Requests\UpdateArticleRequest;

class ArticleController extends Controller
{ 
    public function index()
    {
        $articles = Article::with('tags', 'author')->latest()->paginate(3);
        return view('articles.index', compact('articles'));
    }
    
    public function create()
    {
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request)
    {       
        $imagePath = $request->file('image')->store('images', 'public');

        $article = Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imagePath,
            'publish_date' => $request->publish_date,
            'author_id' => auth()->user()->author->id,
        ]);
        
        $tags = explode(',', $request->tags);
        $tags = array_map('trim', $tags);
    
        $tagIds = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $tagIds[] = $tag->id;
        }
        
        $article->tags()->sync($tagIds);

        return redirect('/articles');
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function edit(Article $article)
    {
        $this->authorize('edit', $article);
    
        return view('articles.edit', ['article' => $article]);
    }

    public function update(UpdateArticleRequest $request, Article $article)
    {
        $this->authorize('update', $article);

        $imagePath = $article->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imagePath,
            'publish_date' => $request->publish_date,
            'author_id' => auth()->user()->author->id,
        ]);

        $tags = explode(',', $request->tags);
        $tags = array_map('trim', $tags);
    
        $tagIds = [];
        foreach ($tags as $tagName) {
            $tag = Tag::firstOrCreate(['name' => $tagName]);
            $tagIds[] = $tag->id;
        }
        
        $article->tags()->sync($tagIds);

        return redirect('/articles/' . $article->id);
    }

    public function destroy(Article $article)
    {
        $this->authorize('delete', $article);

        $article->delete();

        return redirect('/articles');
    }
}
