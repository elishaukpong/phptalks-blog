<?php

namespace App\Services;

use App\Models\Tag;
use Illuminate\Pagination\LengthAwarePaginator;

class TagService implements ModelServiceInterface
{

    public function getAll(): LengthAwarePaginator
    {
        return Tag::paginate(Constants::PAGINATION_NUMBER);
    }

    public function create(array $data): array
    {
        return collect(explode(',', $data['tags']))
            ->map(function ($tag) {
                return Tag::firstOrCreate([
                    'tag' => trim($tag)
                ])->id;
            })
            ->toArray();
    }
}
