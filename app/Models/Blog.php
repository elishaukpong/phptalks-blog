<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'slug'
    ];

    protected $with = [
        'tags'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
