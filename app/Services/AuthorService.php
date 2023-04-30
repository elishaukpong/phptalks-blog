<?php

namespace App\Services;

use App\Models\Author;
use Illuminate\Pagination\LengthAwarePaginator;

class AuthorService implements ModelServiceInterface
{
    public function getAll(): LengthAwarePaginator
    {
        return Author::paginate(Constants::PAGINATION_NUMBER);
    }

    public function create(array $data): Author
    {
        return Author::create($data);
    }
}
