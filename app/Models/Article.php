<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory;

    public function tags() : BelongsToMany {
        return $this->belongsToMany(Tag::class, 'article_tag');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
    
}
