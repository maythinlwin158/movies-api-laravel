<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:1|max:100',
            'summary' => 'required|min:1|max:1500',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'genre_id' => 'required|integer|exists:genres,id',
            'author_id' => 'required|integer|exists:authors,id',
            'tag_ids' => 'required|array',
            'imdb_rating' => 'integer|between:1,5',
        ];
    }
}
