<?php
namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Author;
use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
   
        $tags = Tag::factory(10)->create();
      
        $authors = Author::factory(10)->create();

        Article::factory(10)->create()->each(function ($article) use ($tags) {
            $article->tags()->attach(
                $tags->random(rand(1, 3))->pluck('id')->toArray()
            );
        });

    }
}
