<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public function getRouteKeyName()
    {
        return "slug";
    }

    protected $fillable = [
        "category",
        "slug",
        "description"
    ];

    protected $primaryKey = "category_id";


    // Generate slug when setting categolry;

    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function article(): HasMany
    {
        return $this->hasMany(Article::class, 'article_id');
    }
}
