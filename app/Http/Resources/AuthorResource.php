<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "author_id" => $this->author_id,
            "name" => $this->name,
            "slug" => $this->slug,
            "email" => $this->email,
            "bio" => $this->bio,
            "profile_picture" => $this->profile_picture,
        ];
    }
}
