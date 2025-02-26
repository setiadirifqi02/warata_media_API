<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    /** @use HasFactory<\Database\Factories\ArticleFactory> */
    use HasFactory;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    protected $fillable = [
        'title',
        'slug',
        'author_id',
        'category_id',
        'image',
        'main_content',
        'support_content_1st',
        'support_content_2nd',
        'summary',
        'status',
        'tags',
        'views',
        'likes',
        'published_at',
    ];

    protected $primaryKey = "article_id";

    protected $casts = [
        'tags' => 'array',
        'published_at' => 'datetime'

    ];


    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    // Eager loading article along with its relation (for N+1 Query problem)
    protected $with = ["author", "category"];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class, "author_id");
    }

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class, 'category_id');
    }
}
