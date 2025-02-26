<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;

    public function getRouteKeyName()
    {
        return "slug";
    }

    protected $fillable = [
        "name",
        "slug",
        "email",
        "bio",
        "profile_picture"
    ];


    protected $primaryKey = "author_id";

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function author(): HasMany
    {
        return $this->hasMany(Article::class, "article_id");
    }
}
