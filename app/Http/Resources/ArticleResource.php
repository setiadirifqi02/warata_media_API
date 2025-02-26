<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "article_id" => $this->article_id,
            "title" => $this->title,
            "slug" => $this->slug,
            "author" => new AuthorResource($this->whenLoaded('author')),
            "category" => new CategoryResource($this->whenLoaded('category')),
            "image" => $this->image,
            "main_content" => $this->main_content,
            "support_content_1st" => $this->support_content_1st,
            "support_content_2nd" => $this->support_content_2nd,
            "summary" => $this->summary,
            "status" => $this->status,
            "tags" => $this->tags,
            'views' => $this->views,
            'likes' => $this->likes,
            'published_at' => $this->published_at,

        ];
    }
}
