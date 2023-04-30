<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;

class BlogService implements ModelServiceInterface
{
    public function __construct(
        protected ModelServiceInterface $authorService,
        protected ModelServiceInterface $tagService
    )
    {}

    public function getAll(): LengthAwarePaginator
    {
        return Blog::paginate(Constants::PAGINATION_NUMBER);
    }

    public function create(array $data): Blog
    {
        $blog = Blog::create(
            array_merge($data, [
                'author_id' => $this->authorService->create($data)->id,
                'slug' => $this->slugify($data['title'])
            ])
        );

        $blog->tags()->attach(
            $this->tagService->create($data)
        );

        return $blog;
    }

    public function slugify($text): string
    {
        return Str::slug($text);
    }
}
