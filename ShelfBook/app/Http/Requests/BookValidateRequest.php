<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BookValidateRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'    => 'required|string|max:255',
            'author'   => 'required|string|max:255',
            'pages'    => 'nullable|integer|min:1',
            'status'   => ['required', Rule::in(['to_read', 'reading', 'finished', 'default_to_read'])],
            'rating'   => 'nullable|integer|min:0|max:5',
            'genre_id' => 'required|exists:genre,id',

        ];
    }
}
