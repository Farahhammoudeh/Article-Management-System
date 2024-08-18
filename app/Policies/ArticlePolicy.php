<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Article;

class ArticlePolicy
{
    public function edit(User $user, Article $article)
    {
        return $user->id === $article->author_id;
        
    }
    
    public function update(User $user, Article $article): bool
    { 
        return $user->id === $article->author_id;

    }

    public function delete(User $user, Article $article): bool
    {
        return $user->id === $article->author_id;
    }
}