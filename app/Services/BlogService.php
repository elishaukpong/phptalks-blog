<?php

namespace App\Services;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Tag;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class BlogService implements BlogServiceInterface
{

    public function getAll(): LengthAwarePaginator
    {
        return Blog::paginate(Constants::PAGINATION_NUMBER);
    }

    public function create(array $data): Blog
    {
        $tags = [];

        $author = Author::create($data);

        $blog = Blog::create(
            array_merge($data,['author_id' => $author->id, 'slug' => $this->slugify($data['title'])])
        );

        foreach (explode(',', $data['tags']) as $tag) {
            $tags[] = Tag::firstOrCreate([
                'tag' => trim($tag)
            ])->id;
        }

        $blog->tags()->attach($tags);

        return $blog;
    }

    public function slugify($text): string
    {
        return Str::slug($text);
    }
}
