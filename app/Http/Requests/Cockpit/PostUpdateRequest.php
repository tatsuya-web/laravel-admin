<?php

namespace App\Http\Requests\Cockpit;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'contents' => ['required', 'string', 'max:65535', 'min:0'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'slug' => ['required', 'string', 'max:255', 'unique:posts,slug,' . $this->post],
            'status' => ['required', 'string', 'in:公開,下書き'],
        ];
    }

    public function validPost(): array
    {
        return [
            'title' => $this->title,
            'contents' => $this->contents,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id,
            'slug' => $this->slug,
            'status' => $this->status,
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'title.required' => 'A title is required',
            'contents.required' => 'A content is required',
            'category_id.required' => 'A category is required',
            'user_id.required' => 'A user is required',
            'slug.required' => 'A slug is required',
            'status.required' => 'A status is required',
        ];
    }
}
