<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Pagination\LengthAwarePaginator;

interface BlogServiceInterface
{
    public function getAll(): LengthAwarePaginator;

    public function create(array $data): Blog;
}
