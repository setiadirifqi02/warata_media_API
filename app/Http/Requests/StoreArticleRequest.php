<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => "required|string|max:255",
            'author_id' => "required",
            'category_id' => "required",
            "image" => "string",
            'main_content' => "required|string",
            'support_content_1st' => "required|string",
            'support_content_2nd' => "string",
            'summary' => "required|string",
            'status' => "string",
            "tags" => "array",
            'views' => "integer",
            'likes' => "integer",
            'published_at' => "date",
        ];
    }
}
