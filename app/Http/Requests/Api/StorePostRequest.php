<?php

namespace App\Http\Requests\Api;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
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
            'title' => 'required|string|min:8|max:250',
            'name' => 'required|string|min:8|max:250',
            'slug' => 'required|string|min:8|max:250',
            'keywords' => 'nullable|string|max:250',
            'description' => 'nullable|string|max:500',
            'status' => 'required|boolean',
            'indexation' => 'required|boolean',
            'text' => 'required|string',
            'category' => ['required', 'string', Rule::in(Post::CATEGORY_ARTICLES, Post::CATEGORY_CITIES)],
            'image.*' => 'nullable|image|mimes:jpeg,jpg,png,webp|max:2048',
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'status' => $this->boolean('status'),
            'indexation' => $this->boolean('indexation'),
            'slug' => Str::slug($this->name, '_'),
        ]);
    }
}
