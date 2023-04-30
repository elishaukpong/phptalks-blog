<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

interface ModelServiceInterface
{
    public function getAll(): LengthAwarePaginator;

    public function create(array $data): Model|array;
}
